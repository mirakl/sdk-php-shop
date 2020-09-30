<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Category;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroTracking;

/**
 * (CA01) Update categories from Operator Information System
 *
 * Synchronized categories : import csv file to add/update or delete categories.
 * File should be uploaded.
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CategorySynchroRequest('PATH_FILE');
 *
 * $result = $this->api->synchronizeCategories($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroTracking;;
 *
 * </code>
 */
class CategorySynchroRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/categories/synchros';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CategorySynchroTracking::decorator();
    }
}