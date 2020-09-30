<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformedFileRequest;

/**
 * (P46) Get transformed file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\DownloadProductImportTransformedFileRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportTransformedFileRequest('IMPORT_ID');
 * $result = $api->downloadProductImportTransformedFile($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportTransformedFileRequest extends AbstractDownloadProductImportTransformedFileRequest
{}