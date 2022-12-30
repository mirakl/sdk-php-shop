<?php
namespace Mirakl\MCM\Shop\Request\Catalog\Product;

use Mirakl\MCM\Common\Request\Catalog\Product\AbstractGetSourceProductDataSheetStatusRequest;

/**
 * (CM11) Downloads the source product data sheet status as an iterable collection
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCM\Shop\Client\ShopApiClient;
 * use Mirakl\MCM\Shop\Request\Catalog\Product\GetSourceProductDataSheetStatusRequest;
 *
 * try {
 * // Building request
 * $request = new GetSourceProductDataSheetStatusRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * // Set updated since parameter date (optional)
 * $request->setUpdatedSince(new \DateTime('2022-09-01T12:00'));
 *
 * // Calling the API
 * $result = $api->getSourceProductDataSheetStatus($request);
 *
 * // \Mirakl\Core\Domain\Collection\MiraklCollection
 * var_dump($result); // Result is a MiraklCollection
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class GetSourceProductDataSheetStatusRequest extends AbstractGetSourceProductDataSheetStatusRequest
{}