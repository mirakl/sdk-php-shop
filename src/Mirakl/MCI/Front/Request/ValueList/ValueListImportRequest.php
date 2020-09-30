<?php
namespace Mirakl\MCI\Front\Request\ValueList;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MCI\Front\Domain\ValueList\ValueListImportTracking;

/**
 * (VL01) Send a file to create, update or delete values list.
 * File should be uploaded.
 * CSV file format :
 * <pre>
 * "list-code";"list-label";"value-code";"value-label";"update-delete"
 * </pre>
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\ValueList\ValueListImportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ValueListImportRequest(new \SplFileObject('/path/to/file.csv'));
 * $result = $api->importValueLists($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\ValueList\ValueListImportTracking
 * </code>
 */
class ValueListImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/values_lists/imports';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ValueListImportTracking::decorator();
    }
}