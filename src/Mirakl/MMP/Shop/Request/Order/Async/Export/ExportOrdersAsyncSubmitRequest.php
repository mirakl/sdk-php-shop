<?php
namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncSubmitRequest;

/**
 * (OR13) Export orders file asynchronously
 *
 * The export is asynchronous, export status can be retrieved by calling (OR14).
 * You must give at least one date range filter: created or last updated date or refunds created date.
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Order\Tax\OrderTaxMode;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Async\Export\ExportOrdersAsyncSubmitRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new ExportOrdersAsyncSubmitRequest();
 * $request->setOrderStateCodes(['CANCELED', 'CLOSED']);
 * $request->setChannelCodes(['CHANNEL_1', 'CHANNEL_2']);
 * $request->setStartUpdateDate(new \DateTime('2023-03-20T12:00'));
 * $request->setOrderTaxMode(OrderTaxMode::TAX_EXCLUDED);
 * $request->setWaitingTaxConfirmation(true);
 *
 * $result = $api->exportOrdersAsync($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Order\Async\Export\ExportOrdersAsyncSubmitResponse
 *
 * $trackingId = $result->getTrackingId(); // To be used with API OR14
 * // @see \Mirakl\MMP\Shop\Request\Order\Async\Export\ExportOrdersAsyncStatusRequest
 * </code>
 */
class ExportOrdersAsyncSubmitRequest extends AbstractExportOrdersAsyncSubmitRequest
{}