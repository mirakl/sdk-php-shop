<?php
namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusesRequest;

/**
 * (P51) Get product import statuses
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Product\ProductImportStatusesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new ProductImportStatusesRequest();
 *
 * $result = $api->getProductImportStatuses($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection
 * </code>
 */
class ProductImportStatusesRequest extends AbstractProductImportStatusesRequest
{}