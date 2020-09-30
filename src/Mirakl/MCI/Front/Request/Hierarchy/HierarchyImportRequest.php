<?php
namespace Mirakl\MCI\Front\Request\Hierarchy;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportTracking;

/**
 * (H01) Import operator hierarchies : import file to add hierarchies.
 * File should be uploaded.
 * CSV file format :
 * <pre>
 * "hierarchy-code";"hierarchy-label";"hierarchy-parent-code";"update-delete"
 * </pre>
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new HierarchyImportRequest(new \SplFileObject('/path/to/file.csv'));
 * $result = $api->importHierarchies($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportTracking
 * </code>
 */
class HierarchyImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/hierarchies/imports';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return HierarchyImportTracking::decorator();
    }
}