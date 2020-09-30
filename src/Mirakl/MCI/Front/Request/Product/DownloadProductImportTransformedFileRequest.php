<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformedFileRequest;

/**
 * (P46) Get transformed file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\DownloadProductImportTransformedFileRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportTransformedFileRequest('IMPORT_ID');
 * $result = $api->downloadProductImportTransformedFile($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportTransformedFileRequest extends AbstractDownloadProductImportTransformedFileRequest
{}