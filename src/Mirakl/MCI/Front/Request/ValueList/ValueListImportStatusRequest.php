<?php
namespace Mirakl\MCI\Front\Request\ValueList;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MCI\Front\Domain\ValueList\ValueListImportResult;

/**
 * (VL02) Get value lists import information
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\ValueList\ValueListImportStatusRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ValueListImportStatusRequest('IMPORT_ID');
 * $result = $api->getValueListImportResult($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\ValueList\ValueListImportResult
 * </code>
 */
class ValueListImportStatusRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/values_lists/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ValueListImportResult::decorator();
    }
}