<?php
namespace Mirakl\MMP\Front\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShopShippingFeeCollection;
use Psr\Http\Message\ResponseInterface;

/**
 * (SH01) List shipping fees of offers
 * <p>
 * This method returns the orderer quantity and available quantity of each offer.<br/>
 * The client should check if asked quantity is available and if not, handle it like they want.<br/>
 * The offer available quantity is:
 * <ul>
 * <li>0: if quantity = 0 or the offer is not available</li>
 * <li>x : quantity available</li>
 * </ul>
 * </p>
 *
 * @method  string  getChannelCode()
 * @method  $this   setChannelCode(string $channelCode)
 * @method  array   getOffersWithQuantity()
 * @method  $this   setOffersWithQuantity(array $offers)
 * @method  string  getShippingZoneCode()
 * @method  $this   setShippingZoneCode(string $shippingZoneCode)
 * @method  array   getShopsWithShippingType()
 * @method  $this   setShopsWithShippingType(array $shopsWithShippingType)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Shipping\GetShippingFeesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetShippingFeesRequest('FR', ['2003' => 5, '2002' => 1]);
 * $result = $api->getShippingFees($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Shipping\ShopShippingFeeCollection
 * </code>
 */
class GetShippingFeesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/fees';

    /**
     * @var array
     */
    public $queryParams = [
        'pricing_channel_code',
        'shipping_zone_code',
        'offers_with_quantity' => 'offers',
        'shops_with_shipping_type' => 'shops',
    ];

    /**
     * @param   string  $shippingZoneCode
     * @param   array   $offersWithQuantity
     */
    public function __construct($shippingZoneCode, array $offersWithQuantity)
    {
        parent::__construct();
        $this->setShippingZoneCode($shippingZoneCode);
        $this->setOffersWithQuantity($offersWithQuantity);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function (ResponseInterface $response) {
            $data = \Mirakl\parse_json_response($response);
            $collection = new ShopShippingFeeCollection($data['shops'], $data['total_count']);
            if (isset($data['offers_not_found'])) {
                $collection->setOffersNotFound($data['offers_not_found']);
            }

            return $collection;
        });
    }
}