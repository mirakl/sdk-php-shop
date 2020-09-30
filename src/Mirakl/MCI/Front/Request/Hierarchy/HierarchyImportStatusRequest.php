<?php
namespace Mirakl\MCI\Front\Request\Hierarchy;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportResult;

/**
 * (H02) Get hierarchies import information
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportStatusRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new HierarchyImportStatusRequest('IMPORT_ID');
 * $result = $api->getHierarchyImportResult($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportResult
 * </code>
 */
class HierarchyImportStatusRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/hierarchies/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return HierarchyImportResult::decorator();
    }
}