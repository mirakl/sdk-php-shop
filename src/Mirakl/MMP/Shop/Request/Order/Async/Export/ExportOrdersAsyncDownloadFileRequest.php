<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncDownloadFileRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Async\Export\ExportOrdersAsyncDownloadFileRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $fileUrl = 'https://myserver.mirakl.net/api/orders/async-export/file/60aab253-1b92-41be-9306-561bbd63db6e?file=file1.json';
 * $request = new ExportOrdersAsyncDownloadFileRequest($fileUrl);
 *
 * $orders = $api->retrieveExportOrdersAsyncFile($request);
 * // $orders => @see \Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection
 *
 * </code>
 */
class ExportOrdersAsyncDownloadFileRequest extends AbstractExportOrdersAsyncDownloadFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopOrderCollection::decorator('orders');
    }
}
