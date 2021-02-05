<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportNewProductsReportRequest;

/**
 * (P45) Get products report file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\DownloadProductImportNewProductsReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadProductImportNewProductsReportRequest('IMPORT_ID');
 * $result = $api->downloadProductImportNewProductsReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportNewProductsReportRequest extends AbstractDownloadProductImportNewProductsReportRequest
{}