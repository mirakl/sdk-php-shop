<?php
namespace Mirakl\MMP\Front\Request\Product;

use Mirakl\MMP\Common\Request\Product\AbstractGetProductsRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Product\ProductCollection;

/**
 * (P31) Get products for a list of product's references
 *
 * Sort by product sku and then by product identifier
 * Note: this resource return 100 products maximum
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Product\GetProductsRequest;
 * use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetProductsRequest([new ProductReference('EAN', '0882780560413')]);
 * $result = $api->getProducts($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Product\ProductCollection
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