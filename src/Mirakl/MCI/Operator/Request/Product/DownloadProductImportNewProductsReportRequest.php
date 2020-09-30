<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportNewProductsReportRequest;

/**
 * (P45) Get products report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\DownloadProductImportNewProductsReportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportNewProductsReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportNewProductsReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportNewProductsReportRequest extends AbstractDownloadProductImportNewProductsReportRequest
{}