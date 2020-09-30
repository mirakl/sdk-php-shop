<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusRequest;

/**
 * (P42) Get product import status
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\ProductImportStatusRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ProductImportStatusRequest('IMPORT_ID');
 * $result = $api->getProductImportStatus($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Product\ProductImportResult
 * </code>
 */
class ProductImportStatusRequest extends AbstractProductImportStatusRequest
{}