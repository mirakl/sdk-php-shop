<?php
namespace Mirakl\MMP\Shop\Request\Product;

use Mirakl\MMP\Common\Request\Product\AbstractGetProductsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Product\ProductCollection;

/**
 * (P31) Get products for a list of product's references
 *
 * Sort by product sku and then by product identifier
 * Note: this resource return 100 products maximum
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Product\GetProductsRequest;
 * use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetProductsRequest([new ProductReference('EAN', '0882780560413')]);
 * $result = $api->getProducts($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Product\ProductCollection
 * </code>
 */
class GetProductsRequest extends AbstractGetProductsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductCollection::decorator('products');
    }
}