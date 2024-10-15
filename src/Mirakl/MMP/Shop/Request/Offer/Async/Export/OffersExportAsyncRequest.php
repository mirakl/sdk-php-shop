<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Async\Export;

use Mirakl\MMP\Common\Request\Offer\Async\Export\AbstractOffersExportAsyncRequest;

/**
 * (OF52) Export offers asynchronously
 *
 * Example:
 *
 * <code>
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Async\Export\OffersExportAsyncRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 * $request = new OffersExportAsyncRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new ShopApiClient($url, $apiKey);
 *
 * // Set export parameters
 * $request->setExportType('application/json');
 * $request->setMegabytesPerChunk(10);
 * $request->setLastRequestDate(new \DateTime('2022-10-01 00:00:00'));
 *
 * // Calling the API
 * $result = $api->createOffersExportAsync($request);
 *
 * // \Mirakl\MMP\Common\Domain\Offer\Async\Export\OffersExportAsyncTrackingResult
 * var_dump($result); // decorated response
 * $trackingId = $result->getTrackingId();
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class OffersExportAsyncRequest extends AbstractOffersExportAsyncRequest
{
}
