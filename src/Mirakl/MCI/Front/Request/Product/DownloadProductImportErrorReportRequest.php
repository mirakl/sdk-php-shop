<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportErrorReportRequest;

/**
 * (P44) Get errors report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\DownloadProductImportErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportErrorReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportErrorReportRequest extends AbstractDownloadProductImportErrorReportRequest
{}