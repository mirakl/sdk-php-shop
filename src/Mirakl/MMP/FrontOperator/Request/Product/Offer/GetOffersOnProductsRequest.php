<?php
namespace Mirakl\MMP\FrontOperator\Request\Product\Offer;

use Mirakl\MMP\Common\Request\Product\Offer\AbstractGetOffersOnProductsRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Product\Offer\ProductWithOffersCollection;

/**
 * (P11) List offers for each product given
 *
 * This API uses pagination by default and will return 10 offers
 * Result can be sort with bestPrice or bestEvaluation @see AbstractGetOffersOnProductsRequest
 *
 * @method  bool    getPremium()
 * @method  $this   setPremium(bool $flag)
 * @method  array   getShopIds()
 * @method  $this   setShopIds(array $shopIds)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Product\Offer\GetOffersOnProductsRequest;
 * use Mirakl\MMP\FrontOperator\Domain\Product\Offer\OfferOnProduct;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetOffersOnProductsRequest(['PRODUCT_ID_1', 'PRODUCT_ID_2'], ['OFFER_STATE_CODE_1']);
 * $request->setPricingChannelCode('CHANNEL_1');
 * $request->setShopIds(['SHOP_1', 'SHOP_2']);
 *
 * $result = $api->getOffersOnProducts($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection
 * </code>
 */
class GetOffersOnProductsRequest extends AbstractGetOffersOnProductsRequest
{
    /**
     * @var array
     */
    public $queryParams = [
        'product_ids',
        'offer_state_codes',
        'premium',
        'all_offers',
        'channel_codes',
        'all_channels',
        'product_references',
        'pricing_channel_code',
        'shop_ids'
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductWithOffersCollection::decorator('products');
    }
}