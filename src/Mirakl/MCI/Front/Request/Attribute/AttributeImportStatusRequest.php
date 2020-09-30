<?php
namespace Mirakl\MCI\Front\Request\Attribute;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MCI\Front\Domain\Attribute\AttributeImportResult;

/**
 * (PM02) Get attributes import information
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Attribute\AttributeImportStatusRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new AttributeImportStatusRequest('IMPORT_ID');
 * $result = $api->getAttributeImportResult($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\Attribute\AttributeImportResult
 * </code>
 */
class AttributeImportStatusRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/attributes/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return AttributeImportResult::decorator();
    }
}