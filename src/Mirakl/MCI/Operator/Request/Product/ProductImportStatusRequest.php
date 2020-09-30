<?php
namespace Mirakl\MCI\Operator\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusRequest;

/**
 * (P42) Get product import status
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Product\ProductImportStatusRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new ProductImportStatusRequest('IMPORT_ID');
 * $result = $api->getProductImportStatus($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Product\ProductImportResult
 * </code>
 */
class ProductImportStatusRequest extends AbstractProductImportStatusRequest
{}