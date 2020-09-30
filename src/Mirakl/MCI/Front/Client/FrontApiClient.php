<?php
namespace Mirakl\MCI\Front\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MCI\Common\Domain\Collection\AttributeCollection;
use Mirakl\MCI\Common\Domain\Collection\HierarchyCollection;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection;
use Mirakl\MCI\Common\Domain\Product\ProductImportResult;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;
use Mirakl\MCI\Common\Domain\ValueList;
use Mirakl\MCI\Common\Domain\ValueLists;
use Mirakl\MCI\Front\Domain\Attribute\AttributeImportResult;
use Mirakl\MCI\Front\Domain\Attribute\AttributeImportTracking;
use Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportResult;
use Mirakl\MCI\Front\Domain\Hierarchy\HierarchyImportTracking;
use Mirakl\MCI\Front\Domain\ValueList\ValueListImportResult;
use Mirakl\MCI\Front\Domain\ValueList\ValueListImportTracking;
use Mirakl\MCI\Front\Request\Attribute\AttributeImportErrorReportRequest;
use Mirakl\MCI\Front\Request\Attribute\AttributeImportRequest;
use Mirakl\MCI\Front\Request\Attribute\AttributeImportStatusRequest;
use Mirakl\MCI\Front\Request\Attribute\GetAttributesRequest;
use Mirakl\MCI\Front\Request\Hierarchy\GetHierarchiesRequest;
use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportErrorReportRequest;
use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportRequest;
use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportStatusRequest;
use Mirakl\MCI\Front\Request\Product\DownloadProductImportErrorReportRequest;
use Mirakl\MCI\Front\Request\Product\DownloadProductImportNewProductsReportRequest;
use Mirakl\MCI\Front\Request\Product\DownloadProductImportTransformationErrorReportRequest;
use Mirakl\MCI\Front\Request\Product\DownloadProductImportTransformedFileRequest;
use Mirakl\MCI\Front\Request\Product\ProductImportRequest;
use Mirakl\MCI\Front\Request\Product\ProductImportStatusesRequest;
use Mirakl\MCI\Front\Request\Product\ProductImportStatusRequest;
use Mirakl\MCI\Front\Request\Product\UpdateProductImportStatusRequest;
use Mirakl\MCI\Front\Request\ValueList\GetValueListItemsRequest;
use Mirakl\MCI\Front\Request\ValueList\GetValueListsItemsRequest;
use Mirakl\MCI\Front\Request\ValueList\ValueListImportErrorReportRequest;
use Mirakl\MCI\Front\Request\ValueList\ValueListImportRequest;
use Mirakl\MCI\Front\Request\ValueList\ValueListImportStatusRequest;

/**
 * @method  FileWrapper                     downloadProductImportErrorReport(DownloadProductImportErrorReportRequest $request)
 * @method  FileWrapper                     downloadProductImportNewProductsReport(DownloadProductImportNewProductsReportRequest $request)
 * @method  FileWrapper                     downloadProductImportTransformationErrorReport(DownloadProductImportTransformationErrorReportRequest $request)
 * @method  FileWrapper                     downloadProductImportTransformedFile(DownloadProductImportTransformedFileRequest $request)
 * @method  AttributeCollection             getAttributes(GetAttributesRequest $request)
 * @method  FileWrapper                     getAttributeImportErrorReport(AttributeImportErrorReportRequest $request)
 * @method  AttributeImportResult           getAttributeImportResult(AttributeImportStatusRequest $request)
 * @method  HierarchyCollection             getHierarchies(GetHierarchiesRequest $request)
 * @method  FileWrapper                     getHierarchyImportErrorReport(HierarchyImportErrorReportRequest $request)
 * @method  FileWrapper                     getValueListImportErrorReport(ValueListImportErrorReportRequest $request)
 * @method  ValueList                       getValueListItems(GetValueListItemsRequest $request)
 * @method  HierarchyImportResult           getHierarchyImportResult(HierarchyImportStatusRequest $request)
 * @method  ProductImportResult             getProductImportStatus(ProductImportStatusRequest $request)
 * @method  ProductImportResultCollection   getProductImportStatuses(ProductImportStatusesRequest $request)
 * @method  ValueListImportResult           getValueListImportResult(ValueListImportStatusRequest $request)
 * @method  ValueLists                      getValueLists(GetValueListsItemsRequest $request)
 * @method  AttributeImportTracking         importAttributes(AttributeImportRequest $request)
 * @method  HierarchyImportTracking         importHierarchies(HierarchyImportRequest $request)
 * @method  ProductImportTracking           importProducts(ProductImportRequest $request)
 * @method  ValueListImportTracking         importValueLists(ValueListImportRequest $request)
 * @method  void                            updateProductImportStatus(UpdateProductImportStatusRequest $request)
 */
class FrontApiClient extends AbstractApiClient
{}