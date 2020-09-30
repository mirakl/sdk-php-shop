<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportErrorReportRequest;

/**
 * (P44) Get errors report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\DownloadProductImportErrorReportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportErrorReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportErrorReportRequest extends AbstractDownloadProductImportErrorReportRequest
{}