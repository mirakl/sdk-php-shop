<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MMP\Common\Domain\Collection\Locale\LocaleCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferCollection;
use Mirakl\MMP\Common\Domain\Collection\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\RoleCollection;
use Mirakl\MMP\Common\Domain\Inbox\InboxThreadsResponse;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\PollOffersExportAsyncStatusResult;
use Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsResponse;
use Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsStatusResponse;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsync;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsyncStatus;
use Mirakl\MMP\Common\Domain\Returns\Returns;
use Mirakl\MMP\Common\Domain\Shipment\Shipments;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentsAdditionalInformation;
use Mirakl\MMP\Common\Domain\Version;
use Mirakl\MMP\Common\Request\Inbox\AbstractCreateInboxThreadsRequest;
use Mirakl\MMP\Common\Request\Locale\GetLocalesRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileCsvRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileJsonRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileRequest;
use Mirakl\MMP\Common\Request\Offer\Async\Export\PollOffersExportAsyncRequest;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractCreateOffersStockImportsRequest;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractGetOffersStockImportsErrorReportRequest;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractGetOffersStockImportsStatusRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncFilesRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncRequest;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncStatusRequest;
use Mirakl\MMP\Common\Request\Promotion\AbstractCreatePromotionsRequest;
use Mirakl\MMP\Common\Request\Promotion\AbstractUpdatePromotionRequest;
use Mirakl\MMP\Common\Request\Returns\AbstractCancelReturnsRequest;
use Mirakl\MMP\Common\Request\Returns\AbstractCloseReturnsRequest;
use Mirakl\MMP\Common\Request\SellerBillingCycle\AbstractGetSellerBillingCyclesRequest;
use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentsAdditionalInformationRequest;
use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentsRequest;
use Mirakl\MMP\Common\Request\User\Shop\AbstractGetUsersShopsRolesRequest;
use Mirakl\MMP\Common\Request\Version\GetVersionRequest;

/**
 * @method Returns                           cancelReturns(AbstractCancelReturnsRequest $request)
 * @method Returns                           closeReturns(AbstractCloseReturnsRequest $request)
 * @method InboxThreadsResponse              createInboxThreads(AbstractCreateInboxThreadsRequest $request)
 * @method OffersStockImportsResponse        createOffersStockImports(AbstractCreateOffersStockImportsRequest $request)
 * @method void                              createPromotions(AbstractCreatePromotionsRequest $request)
 * @method ExportTransactionLinesAsync       exportTransactionLinesAsync(ExportTransactionLinesAsyncRequest $request)
 * @method AsyncExportOfferCollection        getOffersExportAsyncFile(OffersExportAsyncFileRequest $request)
 * @method FileWrapper                       getOffersExportAsyncFileCsv(OffersExportAsyncFileCsvRequest $request)
 * @method FileWrapper                       getOffersExportAsyncFileJson(OffersExportAsyncFileJsonRequest $request)
 * @method FileWrapper                       getOffersStockImportsErrorReport(AbstractGetOffersStockImportsErrorReportRequest $request)
 * @method OffersStockImportsStatusResponse  getOffersStockImportsStatus(AbstractGetOffersStockImportsStatusRequest $request)
 * @method SeekableCollection                getSellerBillingCycles(AbstractGetSellerBillingCyclesRequest $request)
 * @method RoleCollection                    getUsersShopsRoles(AbstractGetUsersShopsRolesRequest $request)
 * @method ExportTransactionLinesAsyncStatus pollExportTransactionLinesAsyncStatus(ExportTransactionLinesAsyncStatusRequest $request)
 * @method PollOffersExportAsyncStatusResult pollOffersExportAsyncStatus(PollOffersExportAsyncRequest $request)
 * @method FileWrapper                       retrieveExportTransactionLinesAsyncFiles(ExportTransactionLinesAsyncFilesRequest $request)
 * @method void                              updatePromotion(AbstractUpdatePromotionRequest $request)
 * @method Shipments                         updateShipments(AbstractUpdateShipmentsRequest $request)
 * @method ShipmentsAdditionalInformation    updateShipmentsAdditionalInformation(AbstractUpdateShipmentsAdditionalInformationRequest $request)
 */
class CommonApiClient extends AbstractApiClient
{
    /**
     * (L01) Get active locales
     *
     * @return LocaleCollection
     */
    public function getLocales()
    {
        return (new GetLocalesRequest())->run($this);
    }

    /**
     * (V01) Retrieve Mirakl environment version
     *
     * @return Version
     */
    public function getVersion()
    {
        return (new GetVersionRequest())->run($this);
    }
}
