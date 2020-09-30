<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusesRequest;

/**
 * (P51) Get product import statuses
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\ProductImportStatusesRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new ProductImportStatusesRequest();
 *
 * $result = $api->getProductImportStatuses($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection
 * </code>
 */
class ProductImportStatusesRequest extends AbstractProductImportStatusesRequest
{}