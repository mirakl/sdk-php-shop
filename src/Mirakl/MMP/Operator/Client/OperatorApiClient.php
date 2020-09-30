<?php
namespace Mirakl\MMP\Operator\Client;

use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldCollection;
use Mirakl\MMP\Common\Domain\Collection\Document\DocumentsConfigurationCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\OrderMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\CancelationCreatedCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Document\OrderDocumentCollection;
use Mirakl\MMP\Common\Domain\Collection\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingZoneDetailCollection;
use Mirakl\MMP\Common\Domain\Evaluation;
use Mirakl\MMP\Common\Domain\Message\MessageCreated;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadCreated;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadDetails;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyCreated;
use Mirakl\MMP\Common\Domain\Order\Document\OrderDocumentsUploadResult;
use Mirakl\MMP\Common\Request\Message\DownloadThreadMessageAttachmentRequest;
use Mirakl\MMP\Common\Request\Message\ThreadReplyRequest;
use Mirakl\MMP\Common\Request\Order\Message\CreateOrderThreadRequest;
use Mirakl\MMP\FrontOperator\Client\FrontOperatorApiClient;
use Mirakl\MMP\FrontOperator\Domain\Collection\Promotion\PromotionOffersMappingCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Product\ProductCollection;
use Mirakl\MMP\FrontOperator\Domain\Offer;
use Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionWithOffers;
use Mirakl\MMP\FrontOperator\Domain\Shop\Create\CreatedShops;
use Mirakl\MMP\FrontOperator\Domain\Shop\Update\UpdatedShops;
use Mirakl\MMP\FrontOperator\Request\Order\Cancelation\CreateCancelationsRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Document\DeleteOrderDocumentRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Workflow\CancelOrderRequest;
use Mirakl\MMP\FrontOperator\Request\Promotion\GetPromotionWithOffersRequest;
use Mirakl\MMP\FrontOperator\Request\Promotion\PromotionOffersMappingRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\DeleteShopDocumentRequest;
use Mirakl\MMP\Operator\Domain\Collection\Offer\State\OfferStateCollection;
use Mirakl\MMP\Operator\Domain\Collection\Order\Tax\OrderTaxCollection;
use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments;
use Mirakl\MMP\Operator\Request\AdditionalField\GetAdditionalFieldRequest;
use Mirakl\MMP\Operator\Request\Document\GetDocumentsConfigurationRequest;
use Mirakl\MMP\Operator\Request\Offer\GetOfferRequest;
use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportErrorReportRequest;
use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportReportRequest;
use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportRequest;
use Mirakl\MMP\Operator\Request\Offer\Message\GetOfferMessagesRequest;
use Mirakl\MMP\Operator\Request\Offer\State\GetOfferStateListRequest;
use Mirakl\MMP\Operator\Request\Offer\State\GetOfferStatesRequest;
use Mirakl\MMP\Operator\Request\Offer\UpdateOffersRequest;
use Mirakl\MMP\Operator\Request\Order\Accept\AcceptOrderRequest;
use Mirakl\MMP\Operator\Request\Order\Document\DownloadOrdersDocumentsRequest;
use Mirakl\MMP\Operator\Request\Order\Document\GetOrderDocumentsRequest;
use Mirakl\MMP\Operator\Request\Order\Document\UploadOrdersDocumentsRequest;
use Mirakl\MMP\Operator\Request\Order\Evaluation\GetOrderEvaluationRequest;
use Mirakl\MMP\Operator\Request\Order\Message\CreateOrderMessageRequest;
use Mirakl\MMP\Operator\Request\Order\Message\GetOrderMessagesRequest;
use Mirakl\MMP\Operator\Request\Order\Refund\CreateRefundRequest;
use Mirakl\MMP\Operator\Request\Order\Ship\ShipOrderRequest;
use Mirakl\MMP\Operator\Request\Order\Tax\GetOrderTaxesRequest;
use Mirakl\MMP\Operator\Request\Order\Tracking\UpdateOrderTrackingInfoRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\CreateManualAccountingDocumentRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\DeleteDraftAccountingDocumentRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\GetInvoicesRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\DownloadInvoiceRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\IssueManualAccountingDocumentRequest;
use Mirakl\MMP\Operator\Request\Payment\Invoice\UpdateManualAccountingDocumentRequest;
use Mirakl\MMP\Operator\Request\Product\GetProductsRequest;
use Mirakl\MMP\Operator\Request\Shipping\GetLogisticClassRequest;
use Mirakl\MMP\Operator\Request\Shipping\GetShippingCarriersRequest;
use Mirakl\MMP\Operator\Request\Shipping\GetShippingZonesRequest;
use Mirakl\MMP\Operator\Request\Shop\CreateShopsRequest;
use Mirakl\MMP\Operator\Request\Shop\UpdateShopsRequest;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\RefundCreatedCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferProductImportTracking;
use Mirakl\MMP\OperatorShop\Request\Message\GetThreadDetailsRequest;
use Mirakl\MMP\OperatorShop\Request\Message\GetThreadsRequest;

/**
 * @method void                             acceptOrder(AcceptOrderRequest $request)
 * @method void                             cancelOrder(CancelOrderRequest $request)
 * @method CancelationCreatedCollection     cancelOrderLines(CreateCancelationsRequest $request)
 * @method CreatedManualAccountingDocuments createManualAccountingDocument(CreateManualAccountingDocumentRequest $request)
 * @method MessageCreated                   createOrderMessage(CreateOrderMessageRequest $request)
 * @method ThreadCreated                    createOrderThread(CreateOrderThreadRequest $request)
 * @method CreatedShops                     createShops(CreateShopsRequest $request)
 * @method void                             deleteOrderDocument(DeleteOrderDocumentRequest $request)
 * @method void                             deleteShopDocument(DeleteShopDocumentRequest $request)
 * @method void                             deleteDraftAccountingDocument(DeleteDraftAccountingDocumentRequest $request)
 * @method FileWrapper                      downloadInvoice(DownloadInvoiceRequest $request)
 * @method FileWrapper                      downloadOrdersDocuments(DownloadOrdersDocumentsRequest $request)
 * @method FileWrapper                      downloadThreadMessageAttachment(DownloadThreadMessageAttachmentRequest $request)
 * @method PromotionOffersMappingCollection exportPromotionOffersMapping(PromotionOffersMappingRequest $request)
 * @method AdditionalFieldCollection        getAdditionalFields(GetAdditionalFieldRequest $request)
 * @method DocumentsConfigurationCollection getDocumentsConfiguration(GetDocumentsConfigurationRequest $request)
 * @method InvoiceCollection                getInvoices(GetInvoicesRequest $request)
 * @method Offer                            getOffer(GetOfferRequest $request)
 * @method OfferMessageCollection           getOfferMessages(GetOfferMessagesRequest $request)
 * @method OfferStateCollection             getOfferStateList(GetOfferStateListRequest $request)
 * @method FileWrapper                      getOffersImportErrorReport(OfferImportErrorReportRequest $request)
 * @method OfferImportResult                getOffersImportResult(OfferImportReportRequest $request)
 * @method OrderDocumentCollection          getOrderDocuments(GetOrderDocumentsRequest $request)
 * @method Evaluation                       getOrderEvaluation(GetOrderEvaluationRequest $request)
 * @method OrderMessageCollection           getOrderMessages(GetOrderMessagesRequest $request)
 * @method OrderTaxCollection               getOrderTaxes(GetOrderTaxesRequest $request)
 * @method ProductCollection                getProducts(GetProductsRequest $request)
 * @method PromotionWithOffers              getPromotionWithOffers(GetPromotionWithOffersRequest $request)
 * @method ShippingZoneDetailCollection     getShippingZones(GetShippingZonesRequest $request)
 * @method ThreadDetails                    getThreadDetails(GetThreadDetailsRequest $request)
 * @method SeekableCollection               getThreads(GetThreadsRequest $request)
 * @method OfferProductImportTracking       importOffers(OfferImportRequest $request)
 * @method void                             issueManualAccountingDocument(IssueManualAccountingDocumentRequest $request)
 * @method RefundCreatedCollection          refundOrder(CreateRefundRequest $request)
 * @method ThreadReplyCreated               replyToThread(ThreadReplyRequest $request)
 * @method void                             shipOrder(ShipOrderRequest $request)
 * @method CreatedManualAccountingDocuments updateManualAccountingDocument(UpdateManualAccountingDocumentRequest $request)
 * @method OfferImportTracking              updateOffers(UpdateOffersRequest $request)
 * @method void                             updateOrderTrackingInfo(UpdateOrderTrackingInfoRequest $request)
 * @method UpdatedShops                     updateShops(UpdateShopsRequest $request)
 * @method OrderDocumentsUploadResult       uploadOrderDocuments(UploadOrdersDocumentsRequest $request)
 */
class OperatorApiClient extends FrontOperatorApiClient
{
    /**
     * (OF61) Get the list of the offer states configured on the platform
     *
     * @deprecated  Method deprecated since 1.6.0. Use getOfferStateList instead
     * @return      \Mirakl\MMP\Common\Domain\Collection\Offer\State\OfferStateCollection
     */
    public function getOfferStates()
    {
        return (new GetOfferStatesRequest())->run($this);
    }

    /**
     * (SH31) List all logistic classes
     *
     * @param   null|string $locale
     * @return  LogisticClassCollection
     */
    public function getLogisticClasses($locale = null)
    {
        $request = new GetLogisticClassRequest();

        if (null !== $locale) {
            $request->setLocale((string) $locale);
        }

        return $request->run($this);
    }

    /**
     * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
     *
     * @return  CarrierCollection
     */
    public function getShippingCarriers()
    {
        return (new GetShippingCarriersRequest())->run($this);
    }
}