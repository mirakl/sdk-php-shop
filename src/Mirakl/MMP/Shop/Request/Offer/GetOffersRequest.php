<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\MMP\Common\Request\Offer\AbstractGetOffersRequest;
use Mirakl\MMP\Shop\Domain\Collection\Offer\ShopOfferCollection;

/**
 * (OF21) List offers for a shop
 * This API uses pagination by default and will return 10 offers
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 * @method  string  getSku()
 * @method  $this   setSku(string $sku)
 * @method  string  getProductId()
 * @method  $this   setProductId(string $productId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\GetOffersRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOffersRequest('SHOP_ID');
 * $request->setSku('OFFER_SKU'); // Optional
 * $request->setProductId('PRODUCT_ID'); // Optional
 * $request->setOfferStateCodes(['OFFER_STATE']); // Optional
 * $request->setFavorite(true); // Optional
 * $result = $api->getOffers($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Offer\ShopOfferCollection
 * </code>
 */
class GetOffersRequest extends AbstractGetOffersRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers';

    /**
     * @var array
     */
    public $queryParams = ['shop_id', 'sku', 'offer_state_codes', 'product_id', 'favorite', 'pricing_channel_code'];

    /**
     * @param   string  $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();
        $this->setShopId($shopId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopOfferCollection::decorator('offers');
    }
}