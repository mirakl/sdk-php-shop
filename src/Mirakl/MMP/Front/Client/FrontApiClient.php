<?php
namespace Mirakl\MMP\Front\Client;

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
use Mirakl\MMP\Front\Domain\Collection\Offer\State\OfferStateCollection;
use Mirakl\MMP\Front\Domain\Collection\Order\Tax\OrderTaxCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Create\QuoteRequestReturnCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteRequestCollection;
use Mirakl\MMP\Front\Domain\Collection\Shipping\OrderShippingFeeCollection;
use Mirakl\MMP\Front\Domain\Order\Create\CreatedOrders;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShopShippingFeeCollection;
use Mirakl\MMP\Front\Domain\Quote\Message\CreatedQuoteRequestMessage;
use Mirakl\MMP\Front\Request\AdditionalField\GetAdditionalFieldRequest;
use Mirakl\MMP\Front\Request\BI\ExportBusinessIntelligenceRequest;
use Mirakl\MMP\Front\Request\Document\GetDocumentsConfigurationRequest;
use Mirakl\MMP\Front\Request\Message\GetThreadDetailsRequest;
use Mirakl\MMP\Front\Request\Message\GetThreadsRequest;
use Mirakl\MMP\Front\Request\Offer\GetOfferRequest;
use Mirakl\MMP\Front\Request\Offer\Message\CreateOfferMessageRequest;
use Mirakl\MMP\Front\Request\Offer\Message\GetOfferMessagesRequest;
use Mirakl\MMP\Front\Request\Offer\State\GetOfferStateListRequest;
use Mirakl\MMP\Front\Request\Offer\State\GetOfferStatesRequest;
use Mirakl\MMP\Front\Request\Order\Accept\AcceptOrderRequest;
use Mirakl\MMP\Front\Request\Order\Document\DownloadOrdersDocumentsRequest;
use Mirakl\MMP\Front\Request\Order\Document\GetOrderDocumentsRequest;
use Mirakl\MMP\Front\Request\Order\Document\UploadOrdersDocumentsRequest;
use Mirakl\MMP\Front\Request\Order\Evaluation\CreateOrderEvaluationRequest;
use Mirakl\MMP\Front\Request\Order\Evaluation\GetOrderEvaluationRequest;
use Mirakl\MMP\Front\Request\Order\Message\CreateOrderMessageRequest;
use Mirakl\MMP\Front\Request\Order\Message\GetOrderMessagesRequest;
use Mirakl\MMP\Front\Request\Order\Ship\ShipOrderRequest;
use Mirakl\MMP\Front\Request\Order\Tax\GetOrderTaxesRequest;
use Mirakl\MMP\Front\Request\Order\Tracking\UpdateOrderTrackingInfoRequest;
use Mirakl\MMP\Front\Request\Order\Workflow\CreateOrderRequest;
use Mirakl\MMP\Front\Request\Order\Workflow\InvalidateOrderRequest;
use Mirakl\MMP\Front\Request\Order\Workflow\ValidateOrderRequest;
use Mirakl\MMP\Front\Request\Quote\CreateQuoteRequestsRequest;
use Mirakl\MMP\Front\Request\Quote\GetQuoteRequestsRequest;
use Mirakl\MMP\Front\Request\Quote\Message\QuoteRequestMessageDocumentsRequest;
use Mirakl\MMP\Front\Request\Quote\Message\ShopQuoteRequestMessageRequest;
use Mirakl\MMP\Front\Request\Quote\Order\PlaceOrderFromQuoteRequest;
use Mirakl\MMP\Front\Request\Quote\Scoring\InvalidateQuoteRequest;
use Mirakl\MMP\Front\Request\Quote\Scoring\ValidateQuoteRequest;
use Mirakl\MMP\Front\Request\Shipping\GetLogisticClassRequest;
use Mirakl\MMP\Front\Request\Shipping\GetShippingCarriersRequest;
use Mirakl\MMP\Front\Request\Shipping\GetShippingFeesRequest;
use Mirakl\MMP\Front\Request\Shipping\GetShippingRatesRequest;
use Mirakl\MMP\Front\Request\Shipping\GetShippingZonesRequest;
use Mirakl\MMP\Front\Request\Shop\CreateShopsRequest;
use Mirakl\MMP\FrontOperator\Client\FrontOperatorApiClient;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Promotion\PromotionOffersMappingCollection;
use Mirakl\MMP\FrontOperator\Domain\Offer;
use Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionWithOffers;
use Mirakl\MMP\FrontOperator\Domain\Shop\Create\CreatedShops;
use Mirakl\MMP\FrontOperator\Request\Order\Cancelation\CreateCancelationsRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Document\DeleteOrderDocumentRequest;
use Mirakl\MMP\FrontOperator\Request\Promotion\GetPromotionWithOffersRequest;
use Mirakl\MMP\FrontOperator\Request\Promotion\PromotionOffersMappingRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\DeleteShopDocumentRequest;

/**
 * @method  void                                acceptOrder(AcceptOrderRequest $request)
 * @method  CreatedQuoteRequestMessage          addMessageToQuoteRequest(ShopQuoteRequestMessageRequest $request)
 * @method  CancelationCreatedCollection        cancelOrderLines(CreateCancelationsRequest $request)
 * @method  MessageCreated                      createOfferMessage(CreateOfferMessageRequest $request)
 * @method  MessageCreated                      createOrderMessage(CreateOrderMessageRequest $request)
 * @method  ThreadCreated                       createOrderThread(CreateOrderThreadRequest $request)
 * @method  void                                createOrderEvaluation(CreateOrderEvaluationRequest $request)
 * @method  CreatedOrders                       createOrder(CreateOrderRequest $request)
 * @method  QuoteRequestReturnCollection        createQuoteRequests(CreateQuoteRequestsRequest $request)
 * @method  CreatedShops                        createShops(CreateShopsRequest $request)
 * @method  void                                deleteOrderDocument(DeleteOrderDocumentRequest $request)
 * @method  void                                deleteShopDocument(DeleteShopDocumentRequest $request)
 * @method  FileWrapper                         downloadOrdersDocuments(DownloadOrdersDocumentsRequest $request)
 * @method  FileWrapper                         downloadQuoteRequestMessageDocuments(QuoteRequestMessageDocumentsRequest $request)
 * @method  FileWrapper                         downloadThreadMessageAttachment(DownloadThreadMessageAttachmentRequest $request)
 * @method  FileWrapper                         exportDataForBI(ExportBusinessIntelligenceRequest $request)
 * @method  PromotionOffersMappingCollection    exportPromotionOffersMapping(PromotionOffersMappingRequest $request)
 * @method  AdditionalFieldCollection           getAdditionalFields(GetAdditionalFieldRequest $request)
 * @method  DocumentsConfigurationCollection    getDocumentsConfiguration(GetDocumentsConfigurationRequest $request)
 * @method  Offer                               getOffer(GetOfferRequest $request)
 * @method  OfferMessageCollection              getOfferMessages(GetOfferMessagesRequest $request)
 * @method  OfferStateCollection                getOfferStateList(GetOfferStateListRequest $request)
 * @method  OrderDocumentCollection             getOrderDocuments(GetOrderDocumentsRequest $request)
 * @method  Evaluation                          getOrderEvaluation(GetOrderEvaluationRequest $request)
 * @method  OrderMessageCollection              getOrderMessages(GetOrderMessagesRequest $request)
 * @method  OrderTaxCollection                  getOrderTaxes(GetOrderTaxesRequest $request)
 * @method  PromotionWithOffers                 getPromotionWithOffers(GetPromotionWithOffersRequest $request)
 * @method  QuoteRequestCollection              getQuoteRequests(GetQuoteRequestsRequest $request)
 * @method  ShopShippingFeeCollection           getShippingFees(GetShippingFeesRequest $request)
 * @method  OrderShippingFeeCollection          getShippingRates(GetShippingRatesRequest $request)
 * @method  ShippingZoneDetailCollection        getShippingZones(GetShippingZonesRequest $request)
 * @method  ThreadDetails                       getThreadDetails(GetThreadDetailsRequest $request)
 * @method  SeekableCollection                  getThreads(GetThreadsRequest $request)
 * @method  void                                invalidateOrder(InvalidateOrderRequest $request)
 * @method  void                                invalidateQuoteRequest(InvalidateQuoteRequest $request)
 * @method  OrderCollection                     placeOrderFromQuote(PlaceOrderFromQuoteRequest $request)
 * @method  ThreadReplyCreated                  replyToThread(ThreadReplyRequest $request)
 * @method  void                                shipOrder(ShipOrderRequest $request)
 * @method  OrderDocumentsUploadResult          uploadOrderDocuments(UploadOrdersDocumentsRequest $request)
 * @method  void                                updateOrderTrackingInfo(UpdateOrderTrackingInfoRequest $request)
 * @method  void                                validateOrder(ValidateOrderRequest $request)
 * @method  void                                validateQuoteRequest(ValidateQuoteRequest $request)
 */
class FrontApiClient extends FrontOperatorApiClient
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