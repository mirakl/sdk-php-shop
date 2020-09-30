<?php
namespace Mirakl\MCI\Operator\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MCI\Common\Domain\Collection\AttributeCollection;
use Mirakl\MCI\Common\Domain\Collection\HierarchyCollection;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection;
use Mirakl\MCI\Common\Domain\Product\ProductImportResult;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;
use Mirakl\MCI\Common\Domain\ValueList;
use Mirakl\MCI\Common\Domain\ValueLists;
use Mirakl\MCI\Operator\Request\Attribute\GetAttributesRequest;
use Mirakl\MCI\Operator\Request\Hierarchy\GetHierarchiesRequest;
use Mirakl\MCI\Operator\Request\Product\DownloadProductImportErrorReportRequest;
use Mirakl\MCI\Operator\Request\Product\DownloadProductImportNewProductsReportRequest;
use Mirakl\MCI\Operator\Request\Product\DownloadProductImportTransformationErrorReportRequest;
use Mirakl\MCI\Operator\Request\Product\DownloadProductImportTransformedFileRequest;
use Mirakl\MCI\Operator\Request\Product\ProductImportRequest;
use Mirakl\MCI\Operator\Request\Product\ProductImportStatusesRequest;
use Mirakl\MCI\Operator\Request\Product\ProductImportStatusRequest;
use Mirakl\MCI\Operator\Request\Product\UpdateProductImportStatusRequest;
use Mirakl\MCI\Operator\Request\ValueList\GetValueListItemsRequest;
use Mirakl\MCI\Operator\Request\ValueList\GetValueListsItemsRequest;

/**
 * @method  FileWrapper                     downloadProductImportErrorReport(DownloadProductImportErrorReportRequest $request)
 * @method  FileWrapper                     downloadProductImportNewProductsReport(DownloadProductImportNewProductsReportRequest $request)
 * @method  FileWrapper                     downloadProductImportTransformationErrorReport(DownloadProductImportTransformationErrorReportRequest $request)
 * @method  FileWrapper                     downloadProductImportTransformedFile(DownloadProductImportTransformedFileRequest $request)
 * @method  AttributeCollection             getAttributes(GetAttributesRequest $request)
 * @method  HierarchyCollection             getHierarchies(GetHierarchiesRequest $request)
 * @method  ProductImportResult             getProductImportStatus(ProductImportStatusRequest $request)
 * @method  ProductImportResultCollection   getProductImportStatuses(ProductImportStatusesRequest $request)
 * @method  ValueList                       getValueListItems(GetValueListItemsRequest $request)
 * @method  ValueLists                      getValueLists(GetValueListsItemsRequest $request)
 * @method  ProductImportTracking           importProducts(ProductImportRequest $request)
 * @method  void                            updateProductImportStatus(UpdateProductImportStatusRequest $request)
 */
class OperatorApiClient extends AbstractApiClient
{}