<?php
namespace Mirakl\MMP\Operator\Request\Offer;

use Mirakl\MMP\OperatorShop\Request\Offer\AbstractUpdateOffersRequest;

/**
 * (OF24) Update offers
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Offer\UpdateOffersRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new UpdateOffersRequest('SHOP_ID');
 * $request->setOffers([
 *     'shop_sku' => 'AAPL-CHASAW7852',
 *     'description' => 'never used',
 * ]);
 * $result = $api->updateOffers($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking
 * </code>
 */
class UpdateOffersRequest extends AbstractUpdateOffersRequest
{
    /**
     * @var array
     */
    public $queryParams = ['shop_id' => 'shop'];

    /**
     * @param   string  $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();
        $this->setShopId($shopId);
    }
}