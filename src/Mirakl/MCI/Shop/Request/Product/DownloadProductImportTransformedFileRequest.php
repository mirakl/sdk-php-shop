<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformedFileRequest;

/**
 * (P46) Get transformed file for a products import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\DownloadProductImportTransformedFileRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadProductImportTransformedFileRequest('IMPORT_ID');
 * $result = $api->downloadProductImportTransformedFile($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadProductImportTransformedFileRequest extends AbstractDownloadProductImportTransformedFileRequest
{}