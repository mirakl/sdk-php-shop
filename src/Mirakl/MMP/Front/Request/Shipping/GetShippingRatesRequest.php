<?php
namespace Mirakl\MMP\Front\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\Common\Domain\Shipping\CustomerShippingToAddress;
use Mirakl\MMP\Front\Domain\Collection\Shipping\OfferQuantityShippingTypeTupleCollection
    as OffersWithQtyCollection;
use Mirakl\MMP\Front\Domain\Collection\Shipping\OrderShippingFeeCollection;
use Psr\Http\Message\ResponseInterface;

/**
 * (SH02) List shipping fees of offers
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
 * @method  bool                        isComputeOrderTaxes()
 * @method  $this                       setComputeOrderTaxes(bool $computeOrderTaxes)
 * @method  CustomerShippingToAddress   getCustomerShippingToAddress()
 * @method  $this                       setCustomerShippingToAddress(CustomerShippingToAddress $customerShippingToAddress)
 * @method  string                      getPricingChannelCode()
 * @method  $this                       setPricingChannelCode(string $channelCode)
 * @method  OffersWithQtyCollection     getOffers()
 * @method  $this                       setOffers(array|OffersWithQtyCollection $offers)
 * @method  string                      getShippingZoneCode()
 * @method  $this                       setShippingZoneCode(string $shippingZoneCode)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Shipping\GetShippingRatesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetShippingRatesRequest('FR', [
 *     ['offer_id' => 2003, 'quantity' => 5, 'shipping_type_code' => 'STD', 'leadtime_to_ship' => 2],
 *     ['offer_id' => 2004, 'quantity' => 2, 'leadtime_to_ship' => 5],
 *     ['offer_id' => 2005, 'quantity' => 10],
 * ]);
 * $result = $api->getShippingRates($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Shipping\OrderShippingFeeCollection
 * </code>
 *
 */
class GetShippingRatesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/rates';

    /**
     * @var array
     */
    public $queryParams = [
        'pricing_channel_code',
        'shipping_zone_code',
        'compute_order_taxes',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'offers' => [OffersWithQtyCollection::class, 'create'],
    ];

    /**
     * @param   string                          $shippingZoneCode
     * @param   array|OffersWithQtyCollection   $offers
     */
    public function __construct($shippingZoneCode, $offers)
    {
        parent::__construct();
        $this->setShippingZoneCode($shippingZoneCode);
        $this->setOffers($offers);
    }

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();
        $params['offers'] = \Mirakl\tuples_to_query_param($this->getOffers()->toArray());

        if ($customerShipppingAddress = $this->getCustomerShippingToAddress()) {
            if (!empty($customerShipppingAddress->getStreet1())) {
                $params['customer_shipping_address_street_1'] = $customerShipppingAddress->getStreet1();
            }
            if (!empty($customerShipppingAddress->getStreet2())) {
                $params['customer_shipping_address_street_2'] = $customerShipppingAddress->getStreet2();
            }
            if (!empty($customerShipppingAddress->getCity())) {
                $params['customer_shipping_address_city'] = $customerShipppingAddress->getCity();
            }
            if (!empty($customerShipppingAddress->getZipCode())) {
                $params['customer_shipping_address_zipcode'] = $customerShipppingAddress->getZipCode();
            }
            if (!empty($customerShipppingAddress->getState())) {
                $params['customer_shipping_address_state'] = $customerShipppingAddress->getState();
            }
            if (!empty($customerShipppingAddress->getCountryCode())) {
                $params['customer_shipping_address_country_iso_code'] = $customerShipppingAddress->getCountryCode();
            }
        }

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function (ResponseInterface $response) {
            $data = \Mirakl\parse_json_response($response);
            $collection = new OrderShippingFeeCollection($data['orders'], $data['total_count']);
            if (isset($data['errors'])) {
                $collection->setErrors($data['errors']);
            }

            return $collection;
        });
    }
}