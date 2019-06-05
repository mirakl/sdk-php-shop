<?php
namespace Mirakl\MMP\Shop\Request\Product\Offer;

use Mirakl\MMP\Common\Request\Product\Offer\AbstractGetOffersOnProductsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection;

/**
 * (P11) List offers for each product given
 *
 * This API uses pagination by default and will return 10 offers
 * Result can be sort with bestPrice or bestEvaluation @see AbstractGetOffersOnProductsRequest
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Product\Offer\GetOffersOnProductsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOffersOnProductsRequest(['PRODUCT_ID_1', 'PRODUCT_ID_2'], ['OFFER_STATE_CODE_1']);
 * $result = $api->getOffersOnProducts($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection
 * </code>
 */
class GetOffersOnProductsRequest extends AbstractGetOffersOnProductsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductWithOffersCollection::decorator('products');
    }
}
