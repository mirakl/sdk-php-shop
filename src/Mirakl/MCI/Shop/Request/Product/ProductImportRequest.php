<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportRequest;

/**
 * (P41) Import products to Operator Information System
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\ProductImportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new ProductImportRequest(new \SplFileObject('/path/to/file.csv'));
 * $result = $api->importProducts($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Product\ProductImportTracking
 * </code>
 */
class ProductImportRequest extends AbstractProductImportRequest
{}