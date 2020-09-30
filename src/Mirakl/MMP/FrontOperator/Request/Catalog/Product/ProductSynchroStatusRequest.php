<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Product;

use Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroResult;
use Mirakl\MMP\Common\Request\Synchro\AbstractSynchroStatusRequest;

/**
 * (P22) Get status of the synchronisation
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new ProductSynchroStatusRequest($synchroId);
 *
 * $result = $this->api->getProductSynchroResult($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroResult;
 *
 * </code>
 */
class ProductSynchroStatusRequest extends AbstractSynchroStatusRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/synchros/{synchro}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductSynchroResult::decorator();
    }
}