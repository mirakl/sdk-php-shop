<?php
namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncStatusRequest;

/**
 * (OR14) Poll the status of an asynchronous orders export (OR13)
 *
 * Retrieve the status for an OR13 orders export request.
 * When the export is complete, the URLs to retrieve the files are returned (OR15).
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Async\Export\ExportOrdersAsyncStatusRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $trackingId = '6cdc6ae1-46db-42c8-9e07-ff62b99108c4';
 * $request = new ExportOrdersAsyncStatusRequest($trackingId);
 *
 * $result = $api->pollExportOrdersAsyncStatus($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Order\Async\Export\ExportOrdersAsyncStatusResponse
 * </code>
 */
class ExportOrdersAsyncStatusRequest extends AbstractExportOrdersAsyncStatusRequest
{}