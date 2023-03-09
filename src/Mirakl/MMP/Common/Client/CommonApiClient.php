<?php
namespace Mirakl\MMP\Common\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MMP\Common\Domain\Collection\Locale\LocaleCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\OffersExportAsyncTrackingResult;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\PollOffersExportAsyncStatusResult;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsync;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsyncStatus;
use Mirakl\MMP\Common\Domain\Version;
use Mirakl\MMP\Common\Request\Locale\GetLocalesRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileCsvRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileJsonRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\PollOffersExportAsyncRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncFilesRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncStatusRequest;
use Mirakl\MMP\Common\Request\Version\GetVersionRequest;

/**
 * @method OffersExportAsyncTrackingResult   createOffersExportAsync(OffersExportAsyncRequest $request)
 * @method AsyncExportOfferCollection        getOffersExportAsyncFile(OffersExportAsyncFileRequest $request)
 * @method FileWrapper                       getOffersExportAsyncFileCsv(OffersExportAsyncFileCsvRequest $request)
 * @method FileWrapper                       getOffersExportAsyncFileJson(OffersExportAsyncFileJsonRequest $request)
 * @method PollOffersExportAsyncStatusResult pollOffersExportAsyncStatus(PollOffersExportAsyncRequest $request)
 * @method ExportTransactionLinesAsync       exportTransactionLinesAsync(ExportTransactionLinesAsyncRequest $request)
 * @method ExportTransactionLinesAsyncStatus pollExportTransactionLinesAsyncStatus(ExportTransactionLinesAsyncStatusRequest $request)
 * @method FileWrapper                       retrieveExportTransactionLinesAsyncFiles(ExportTransactionLinesAsyncFilesRequest $request)
 */
class CommonApiClient extends AbstractApiClient
{
    /**
     * (L01) Get active locales
     *
     * @return  LocaleCollection
     */
    public function getLocales()
    {
        return (new GetLocalesRequest())->run($this);
    }

    /**
     * (V01) Retrieve Mirakl environment version
     *
     * @return  Version
     */
    public function getVersion()
    {
        return (new GetVersionRequest())->run($this);
    }
}