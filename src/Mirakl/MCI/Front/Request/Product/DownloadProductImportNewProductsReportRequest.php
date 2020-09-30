<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportNewProductsReportRequest;

/**
 * (P45) Get products report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\DownloadProductImportNewProductsReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new DownloadProductImportNewProductsReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportNewProductsReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportNewProductsReportRequest extends AbstractDownloadProductImportNewProductsReportRequest
{}