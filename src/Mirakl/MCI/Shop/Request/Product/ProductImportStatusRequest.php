<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusRequest;

/**
 * (P42) Get product import status
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\ProductImportStatusRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new ProductImportStatusRequest('IMPORT_ID');
 * $result = $api->getProductImportStatus($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Product\ProductImportResult
 * </code>
 */
class ProductImportStatusRequest extends AbstractProductImportStatusRequest
{}