<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Category;

use Mirakl\MMP\Common\Request\Synchro\AbstractSynchroStatusRequest;
use Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroResult;

/**
 * (CA02) Get status of the synchronisation
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroStatusRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CategorySynchroStatusRequest('SYNCHRO_ID');
 *
 * $result = $this->api->getCategorySynchroResult($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroResult;
 *
 * </code>
 */
class CategorySynchroStatusRequest extends AbstractSynchroStatusRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/categories/synchros/{synchro}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CategorySynchroResult::decorator();
    }
}