<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportErrorReportRequest;

/**
 * (P44) Get errors report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\DownloadProductImportErrorReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadProductImportErrorReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportErrorReportRequest extends AbstractDownloadProductImportErrorReportRequest
{}