<?php
namespace Mirakl\MCI\Front\Request\Attribute;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MCI\Front\Domain\Attribute\AttributeImportTracking;

/**
 *
 * (PM01) Import operator attributes to Mirakl
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Attribute\AttributeImportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new AttributeImportRequest(new \SplFileObject('/path/to/file.csv'));
 * $result = $api->importAttributes($request);
 * // $result => @see \Mirakl\MCI\Front\Domain\Attribute\AttributeImportTracking
 * </code>
 */
class AttributeImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/attributes/imports';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return AttributeImportTracking::decorator();
    }
}