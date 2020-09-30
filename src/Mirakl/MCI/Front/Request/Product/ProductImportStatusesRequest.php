<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusesRequest;

/**
 * (P51) Get product import statuses
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\ProductImportStatusesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ProductImportStatusesRequest();
 *
 * $result = $api->getProductImportStatuses($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection
 * </code>
 */
class ProductImportStatusesRequest extends AbstractProductImportStatusesRequest
{}