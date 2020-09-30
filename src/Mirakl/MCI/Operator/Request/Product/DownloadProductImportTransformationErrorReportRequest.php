<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformationErrorReportRequest;

/**
 * (P47) Get transformation errors report file for a product import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\DownloadProductImportTransformationErrorReportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportTransformationErrorReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportTransformationErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportTransformationErrorReportRequest
    extends AbstractDownloadProductImportTransformationErrorReportRequest
{}