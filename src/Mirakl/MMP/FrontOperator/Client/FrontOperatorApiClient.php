<?php
namespace Mirakl\MMP\FrontOperator\Client;

use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Response\Decorator\File;
use Mirakl\MMP\Common\Client\CommonApiClient;
use Mirakl\MMP\Common\Domain\Collection\Evaluation\AssessmentCollection;
use Mirakl\MMP\Common\Domain\Collection\Evaluation\EvaluationCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection;
use Mirakl\MMP\Common\Domain\Collection\Payment\TransactionLogCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductCollection;
use Mirakl\MMP\Common\Domain\Collection\SeekableCollection;
use Mirakl\MMP\Common\Domain\Document\DocumentsUploadResult;
use Mirakl\MMP\Common\Domain\Shipment\CreatedShipments;
use Mirakl\MMP\Common\Domain\Shipment\UpdatedShipmentTrackings;
use Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse;
use Mirakl\MMP\Common\Request\Product\Export\ExportProductsFileRequest;
use Mirakl\MMP\Common\Request\Product\Export\ExportProductsRequest;
use Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroResult;
use Mirakl\MMP\FrontOperator\Domain\Category\Synchro\CategorySynchroTracking;
use Mirakl\MMP\FrontOperator\Domain\Collection\Category\CategoryCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Offer\ExportOfferCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Offer\OfferCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit\DebitOrderCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund\RefundOrderCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Product\Offer\ProductWithOffersCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Promotion\PromotionCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Reason\ReasonCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Location\ShopTaxLocationCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\ShopCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField\UpdateAdditionalFieldsResult;
use Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroResult;
use Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroTracking;
use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroErrorReportRequest;
use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroRequest;
use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroStatusRequest;
use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroErrorReportRequest;
use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroRequest;
use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroStatusRequest;
use Mirakl\MMP\FrontOperator\Request\Category\GetCategoriesRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\Invoice\ConfirmAccountingDocumentPaymentRequest;
use Mirakl\MMP\FrontOperator\Request\Offer\GetOffersRequest;
use Mirakl\MMP\FrontOperator\Request\Offer\OffersExportFileRequest;
use Mirakl\MMP\FrontOperator\Request\Offer\OffersExportRequest;
use Mirakl\MMP\FrontOperator\Request\Order\AdditionalField\UpdateAdditionalFieldsRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Document\DeleteOrderDocumentRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Evaluation\GetAssessmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Order\GetOrdersRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Incident\CloseIncidentRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Incident\OpenIncidentRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Workflow\CancelOrderRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Workflow\ReceiveOrderRequest;
use Mirakl\MMP\FrontOperator\Request\Order\Workflow\ToCollectOrderRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\Debit\ConfirmOrderDebitRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\Debit\GetOrderDebitsRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\GetTransactionLogsRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\Refund\ConfirmOrderRefundRequest;
use Mirakl\MMP\FrontOperator\Request\Payment\Refund\GetOrderRefundsRequest;
use Mirakl\MMP\FrontOperator\Request\Product\Offer\GetOffersOnProductsRequest;
use Mirakl\MMP\FrontOperator\Request\Promotion\GetPromotionsRequest;
use Mirakl\MMP\FrontOperator\Request\Reason\GetReasonsRequest;
use Mirakl\MMP\FrontOperator\Request\Reason\GetTypeReasonsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\CreateShipmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\GetShipmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\ReceiveShipmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\ShipShipmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\ToCollectShipmentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shipment\UpdateShipmentTrackingsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\DeleteShopDocumentRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\DownloadShopsDocumentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\GetShopDocumentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Document\UploadShopDocumentsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\GetShopEvaluationsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\GetShopsRequest;
use Mirakl\MMP\FrontOperator\Request\Shop\Location\GetShopTaxLocationsRequest;

/**
 * @method  void                            cancelOrder(CancelOrderRequest $request)
 * @method  void                            closeIncident(CloseIncidentRequest $request)
 * @method  void                            collectOrder(ToCollectOrderRequest $request)
 * @method  void                            confirmAccountingDocumentPayment(ConfirmAccountingDocumentPaymentRequest $request)
 * @method  void                            confirmOrderDebit(ConfirmOrderDebitRequest $request)
 * @method  void                            confirmOrderRefund(ConfirmOrderRefundRequest $request)
 * @method  CreatedShipments                createShipments(CreateShipmentsRequest $request)
 * @method  void                            deleteOrderDocument(DeleteOrderDocumentRequest $request)
 * @method  void                            deleteShopDocument(DeleteShopDocumentRequest $request)
 * @method  FileWrapper                     downloadShopsDocuments(DownloadShopsDocumentsRequest $request)
 * @method  ExportOfferCollection           exportOffers(OffersExportRequest $request)
 * @method  FileWrapper                     exportOffersToFile(OffersExportFileRequest $request)
 * @method  ExportProductCollection         exportProducts(ExportProductsRequest $request)
 * @method  File                            exportProductsInCsv(ExportProductsFileRequest $request)
 * @method  AssessmentCollection            getAssessments(GetAssessmentsRequest $request)
 * @method  CategoryCollection              getCategories(GetCategoriesRequest $request)
 * @method  CategorySynchroResult           getCategorySynchroResult(CategorySynchroStatusRequest $request)
 * @method  FileWrapper                     getCategorySynchroErrorReport(CategorySynchroErrorReportRequest $request)
 * @method  ProductWithOffersCollection     getOffersOnProducts(GetOffersOnProductsRequest $request)
 * @method  DebitOrderCollection            getOrderDebits(GetOrderDebitsRequest $request)
 * @method  RefundOrderCollection           getOrderRefunds(GetOrderRefundsRequest $request)
 * @method  OrderCollection                 getOrders(GetOrdersRequest $request)
 * @method  FileWrapper                     getProductSynchroErrorReport(ProductSynchroErrorReportRequest $request)
 * @method  ProductSynchroResult            getProductSynchroResult(ProductSynchroStatusRequest $request)
 * @method  PromotionCollection             getPromotions(GetPromotionsRequest $request)
 * @method  ReasonCollection                getReasons(GetReasonsRequest $request)
 * @method  SeekableCollection              getShipments(GetShipmentsRequest $request)
 * @method  ShopDocumentCollection          getShopDocuments(GetShopDocumentsRequest $request)
 * @method  EvaluationCollection            getShopEvaluations(GetShopEvaluationsRequest $request)
 * @method  OfferCollection                 getShopOffers(GetOffersRequest $request)
 * @method  ShopCollection                  getShops(GetShopsRequest $request)
 * @method  ShopTaxLocationCollection       getShopTaxLocations(GetShopTaxLocationsRequest $request)
 * @method  TransactionLogCollection        getTransactionLogs(GetTransactionLogsRequest $request)
 * @method  ReasonCollection                getTypeReasons(GetTypeReasonsRequest $request)
 * @method  void                            openIncident(OpenIncidentRequest $request)
 * @method  void                            receiveOrder(ReceiveOrderRequest $request)
 * @method  ShipmentWorkflowResponse        receiveShipments(ReceiveShipmentsRequest $request)
 * @method  ShipmentWorkflowResponse        shipShipments(ShipShipmentsRequest $request)
 * @method  CategorySynchroTracking         synchronizeCategories(CategorySynchroRequest $request)
 * @method  ProductSynchroTracking          synchronizeProducts(ProductSynchroRequest $request)
 * @method  ShipmentWorkflowResponse        toCollectShipments(ToCollectShipmentsRequest $request)
 * @method  UpdateAdditionalFieldsResult    updateOrderAdditionalFields(UpdateAdditionalFieldsRequest $request)
 * @method  UpdatedShipmentTrackings        updateShipmentTrackings(UpdateShipmentTrackingsRequest $request)
 * @method  DocumentsUploadResult           uploadShopDocuments(UploadShopDocumentsRequest $request)
 */
class FrontOperatorApiClient extends CommonApiClient
{
    /**
     * (P13) Export all products
     *
     * @return ExportProductCollection
     */
    public function getExportProducts()
    {
        return (new ExportProductsRequest())->run($this);
    }

    /**
     * (P13) Export all products in csv file
     *
     * @return File
     */
    public function getExportProductsCsv()
    {
        return (new ExportProductsFileRequest())->run($this);
    }
}