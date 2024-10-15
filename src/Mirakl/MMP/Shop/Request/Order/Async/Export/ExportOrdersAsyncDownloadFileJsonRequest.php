<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncDownloadFileJsonRequest;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Async\Export\ExportOrdersAsyncDownloadFileJsonRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $fileUrl = 'https://myserver.mirakl.net/api/orders/async-export/file/60aab253-1b92-41be-9306-561bbd63db6e?file=file1.json';
 * $request = new ExportOrdersAsyncDownloadFileJsonRequest($fileUrl);
 *
 * $result = $api->retrieveExportOrdersAsyncFileJson($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 *
 * // Get the stream file
 * $streamFile = $result->getFile();
 * var_dump($streamFile); // returns \SplTempFileObject
 *
 * </code>
 */
class ExportOrdersAsyncDownloadFileJsonRequest extends AbstractExportOrdersAsyncDownloadFileJsonRequest
{
}
