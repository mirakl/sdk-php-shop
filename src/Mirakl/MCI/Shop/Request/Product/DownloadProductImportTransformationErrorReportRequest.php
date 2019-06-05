<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformationErrorReportRequest;

/**
 * (P47) Get transformation errors report file for a product import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\DownloadProductImportTransformationErrorReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
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