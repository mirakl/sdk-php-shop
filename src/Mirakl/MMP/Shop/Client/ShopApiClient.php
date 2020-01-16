<?php
namespace Mirakl\MMP\Shop\Client;

use Mirakl\Core\Client\ShopApiClientTrait;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MMP\Common\Client\CommonApiClient;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldCollection;
use Mirakl\MMP\Common\Domain\Collection\Document\DocumentsConfigurationCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\OrderMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\State\OfferStateCollection as CommonOfferStateCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Document\OrderDocumentCollection;
use Mirakl\MMP\Common\Domain\Collection\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingZoneDetailCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection;
use Mirakl\MMP\Common\Domain\Document\DocumentsUploadResult;
use Mirakl\MMP\Common\Domain\Evaluation;
use Mirakl\MMP\Common\Domain\Message\MessageCreated;
use Mirakl\MMP\Common\Domain\Order\Document\OrderDocumentsUploadResult;
use Mirakl\MMP\Common\Domain\Shipment\CreatedShipments;
use Mirakl\MMP\Common\Domain\Shipment\UpdatedShipmentTrackings;
use Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\RefundCreatedCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferProductImportTracking;
use Mirakl\MMP\Shop\Domain\Collection\Offer\ShopOfferCollection;
use Mirakl\MMP\Shop\Domain\Collection\Offer\State\OfferStateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Tax\OrderTaxCollection;
use Mirakl\MMP\Shop\Domain\Collection\Product\ProductCollection;
use Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection;
use Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection;
use Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection;
use Mirakl\MMP\Shop\Domain\Offer\ShopOffer;
use Mirakl\MMP\Shop\Domain\Order\AdditionalField\UpdateAdditionalFieldsResult;
use Mirakl\MMP\Shop\Domain\Shop\ShopAccount;
use Mirakl\MMP\Shop\Request\AdditionalField\GetAdditionalFieldRequest;
use Mirakl\MMP\Shop\Request\Document\GetDocumentsConfigurationRequest;
use Mirakl\MMP\Shop\Request\Offer\GetAccountRequest;
use Mirakl\MMP\Shop\Request\Offer\GetOfferRequest;
use Mirakl\MMP\Shop\Request\Offer\GetOffersRequest;
use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportReportRequest;
use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportRequest;
use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportErrorReportRequest;
use Mirakl\MMP\Shop\Request\Offer\Message\AnswerOfferMessageRequest;
use Mirakl\MMP\Shop\Request\Offer\Message\GetOfferMessagesRequest;
use Mirakl\MMP\Shop\Request\Offer\State\GetOfferStatesRequest;
use Mirakl\MMP\Shop\Request\Offer\State\GetOfferStateListRequest;
use Mirakl\MMP\Shop\Request\Offer\UpdateOffersRequest;
use Mirakl\MMP\Shop\Request\Order\Accept\AcceptOrderRequest;
use Mirakl\MMP\Shop\Request\Order\AdditionalField\UpdateAdditionalFieldsRequest;
use Mirakl\MMP\Shop\Request\Order\Document\DeleteOrderDocumentRequest;
use Mirakl\MMP\Shop\Request\Order\Document\DownloadOrdersDocumentsRequest;
use Mirakl\MMP\Shop\Request\Order\Document\GetOrderDocumentsRequest;
use Mirakl\MMP\Shop\Request\Order\Document\UploadOrdersDocumentsRequest;
use Mirakl\MMP\Shop\Request\Order\Evaluation\GetOrderEvaluationRequest;
use Mirakl\MMP\Shop\Request\Order\Get\GetOrdersRequest;
use Mirakl\MMP\Shop\Request\Order\Message\CreateOrderMessageRequest;
use Mirakl\MMP\Shop\Request\Order\Message\GetOrderMessagesRequest;
use Mirakl\MMP\Shop\Request\Order\Refund\CreateRefundRequest;
use Mirakl\MMP\Shop\Request\Order\Ship\ShipOrderRequest;
use Mirakl\MMP\Shop\Request\Order\Tax\GetOrderTaxesRequest;
use Mirakl\MMP\Shop\Request\Order\Tracking\UpdateOrderTrackingInfoRequest;
use Mirakl\MMP\Shop\Request\Order\Workflow\CancelOrderRequest;
use Mirakl\MMP\Shop\Request\Payment\Invoice\DownloadInvoiceRequest;
use Mirakl\MMP\Shop\Request\Payment\Invoice\GetInvoicesRequest;
use Mirakl\MMP\Shop\Request\Product\GetProductsRequest;
use Mirakl\MMP\Shop\Request\Product\Offer\GetOffersOnProductsRequest;
use Mirakl\MMP\Shop\Request\Promotion\GetPromotionsRequest;
use Mirakl\MMP\Shop\Request\Reason\GetTypeReasonsRequest;
use Mirakl\MMP\Shop\Request\Shipment\CreateShipmentsRequest;
use Mirakl\MMP\Shop\Request\Shipment\GetShipmentsRequest;
use Mirakl\MMP\Shop\Request\Shipment\ShipShipmentsRequest;
use Mirakl\MMP\Shop\Request\Shipment\UpdateShipmentTrackingsRequest;
use Mirakl\MMP\Shop\Request\Shipping\GetLogisticClassRequest;
use Mirakl\MMP\Shop\Request\Shipping\GetShippingCarriersRequest;
use Mirakl\MMP\Shop\Request\Shipping\GetShippingZonesRequest;
use Mirakl\MMP\Shop\Request\Shop\Document\DeleteShopDocumentRequest;
use Mirakl\MMP\Shop\Request\Shop\Document\DownloadShopDocumentsRequest;
use Mirakl\MMP\Shop\Request\Shop\Document\GetShopDocumentsRequest;
use Mirakl\MMP\Shop\Request\Shop\Document\UploadShopDocumentsRequest;

/**
 * @method  void                                acceptOrder(AcceptOrderRequest $request)
 * @method  MessageCreated                      answerOfferMessage(AnswerOfferMessageRequest $request)
 * @method  void                                cancelOrder(CancelOrderRequest $request)
 * @method  MessageCreated                      createOrderMessage(CreateOrderMessageRequest $request)
 * @method  CreatedShipments                    createShipments(CreateShipmentsRequest $request)
 * @method  void                                deleteOrderDocument(DeleteOrderDocumentRequest $request)
 * @method  void                                deleteShopDocument(DeleteShopDocumentRequest $request)
 * @method  FileWrapper                         downloadInvoice(DownloadInvoiceRequest $request)
 * @method  FileWrapper                         downloadOrdersDocuments(DownloadOrdersDocumentsRequest $request)
 * @method  FileWrapper                         downloadShopDocuments(DownloadShopDocumentsRequest $request)
 * @method  AdditionalFieldCollection           getAdditionalFields(GetAdditionalFieldRequest $request)
 * @method  DocumentsConfigurationCollection    getDocumentsConfiguration(GetDocumentsConfigurationRequest $request)
 * @method  InvoiceCollection                   getInvoices(GetInvoicesRequest $request)
 * @method  ShopOffer                           getOffer(GetOfferRequest $request)
 * @method  OfferMessageCollection              getOfferMessages(GetOfferMessagesRequest $request)
 * @method  ShopOfferCollection                 getOffers(GetOffersRequest $request)
 * @method  FileWrapper                         getOffersImportErrorReport(OfferImportErrorReportRequest $request)
 * @method  OfferImportResult                   getOffersImportResult(OfferImportReportRequest $request)
 * @method  ProductWithOffersCollection         getOffersOnProducts(GetOffersOnProductsRequest $request)
 * @method  CommonOfferStateCollection          getOfferStates(GetOfferStatesRequest $request)
 * @method  OfferStateCollection                getOfferStateList(GetOfferStateListRequest $request)
 * @method  OrderDocumentCollection             getOrderDocuments(GetOrderDocumentsRequest $request)
 * @method  Evaluation                          getOrderEvaluation(GetOrderEvaluationRequest $request)
 * @method  OrderMessageCollection              getOrderMessages(GetOrderMessagesRequest $request)
 * @method  ShopOrderCollection                 getOrders(GetOrdersRequest $request)
 * @method  OrderTaxCollection                  getOrderTaxes(GetOrderTaxesRequest $request)
 * @method  ProductCollection                   getProducts(GetProductsRequest $request)
 * @method  PromotionCollection                 getPromotions(GetPromotionsRequest $request)
 * @method  SeekableCollection                  getShipments(GetShipmentsRequest $request)
 * @method  ReasonCollection                    getTypeReasons(GetTypeReasonsRequest $request)
 * @method  ShippingZoneDetailCollection        getShippingZones(GetShippingZonesRequest $request)
 * @method  ShopDocumentCollection              getShopDocuments(GetShopDocumentsRequest $request)
 * @method  OfferProductImportTracking          importOffers(OfferImportRequest $request)
 * @method  RefundCreatedCollection             refundOrder(CreateRefundRequest $request)
 * @method  void                                shipOrder(ShipOrderRequest $request)
 * @method  ShipmentWorkflowResponse            shipShipments(ShipShipmentsRequest $request)
 * @method  OfferImportTracking                 updateOffers(UpdateOffersRequest $request)
 * @method  void                                updateOrderTrackingInfo(UpdateOrderTrackingInfoRequest $request)
 * @method  OrderDocumentsUploadResult          uploadOrderDocuments(UploadOrdersDocumentsRequest $request)
 * @method  DocumentsUploadResult               uploadShopDocuments(UploadShopDocumentsRequest $request)
 * @method  UpdateAdditionalFieldsResult        updateOrderAdditionalFields(UpdateAdditionalFieldsRequest $request)
 * @method  UpdatedShipmentTrackings            updateShipmentTrackings(UpdateShipmentTrackingsRequest $request)
 */
class ShopApiClient extends CommonApiClient
{
    use ShopApiClientTrait;

    /**
     * @param   string      $baseUrl
     * @param   string      $apiKey
     * @param   string|null $shopId
     */
    public function __construct($baseUrl, $apiKey, $shopId = null)
    {
        parent::__construct($baseUrl, $apiKey);

        if ($shopId) {
            $this->setShopId($shopId);
        }
    }

    /**
     * (A01) Get account information
     *
     * @return  ShopAccount
     */
    public function getAccount()
    {
        return (new GetAccountRequest())->run($this);
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