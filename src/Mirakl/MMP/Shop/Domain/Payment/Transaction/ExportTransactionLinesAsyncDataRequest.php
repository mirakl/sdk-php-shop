<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncFilesRequest;
use Mirakl\MMP\Shop\Domain\Collection\Payment\Transaction\TransactionLineCollection;

/**
 * (TL05) Retrieve transaction logs files once asynchronous transaction logs export is complete (TL04)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Payment\Transaction\ExportTransactionLinesAsyncDataRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $fileUrl = 'https://server/api/sellerpayment/transactions_logs/export/async/file/1b164045-49d7-4b4d-9751-66465f8f5298?file=0.json';
 * $request = new ExportTransactionLinesAsyncDataRequest($fileUrl);
 *
 * $result = $api->retrieveExportTransactionLinesAsyncData($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Payment\Transaction\TransactionLineCollection
 * </code>
 */
class ExportTransactionLinesAsyncDataRequest extends ExportTransactionLinesAsyncFilesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return TransactionLineCollection::decorator('data');
    }
}
