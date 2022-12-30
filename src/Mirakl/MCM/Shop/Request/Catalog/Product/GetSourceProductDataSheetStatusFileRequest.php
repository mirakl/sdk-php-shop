<?php
namespace Mirakl\MCM\Shop\Request\Catalog\Product;

use Mirakl\Core\Response\Decorator\File;
use Mirakl\MCM\Common\Request\Catalog\Product\AbstractGetSourceProductDataSheetStatusRequest;

/**
 * (CM11) Downloads the source product data sheet status file
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCM\Shop\Client\ShopApiClient;
 * use Mirakl\MCM\Shop\Request\Catalog\Product\GetSourceProductDataSheetStatusFileRequest;
 *
 * try {
 * // Building request
 * $request = new GetSourceProductDataSheetStatusFileRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * // Set updated since parameter date (optional)
 * $request->setUpdatedSince(new \DateTime('2022-09-01T12:00'));
 *
 * // Calling the API
 * $result = $api->getSourceProductDataSheetStatusFile($request);
 *
 * // \Mirakl\Core\Domain\FileWrapper
 * var_dump($result); // Result is file wrapper
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class GetSourceProductDataSheetStatusFileRequest extends AbstractGetSourceProductDataSheetStatusRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new File('json');
    }
}