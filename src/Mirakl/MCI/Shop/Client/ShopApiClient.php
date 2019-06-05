<?php
namespace Mirakl\MCI\Shop\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Client\ShopApiClientTrait;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MCI\Common\Domain\Collection\AttributeCollection;
use Mirakl\MCI\Common\Domain\Collection\HierarchyCollection;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection;
use Mirakl\MCI\Common\Domain\Product\ProductImportResult;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;
use Mirakl\MCI\Common\Domain\ValueList;
use Mirakl\MCI\Common\Domain\ValueLists;
use Mirakl\MCI\Shop\Request\Attribute\GetAttributesRequest;
use Mirakl\MCI\Shop\Request\Hierarchy\GetHierarchiesRequest;
use Mirakl\MCI\Shop\Request\Product\DownloadProductImportErrorReportRequest;
use Mirakl\MCI\Shop\Request\Product\DownloadProductImportNewProductsReportRequest;
use Mirakl\MCI\Shop\Request\Product\DownloadProductImportTransformationErrorReportRequest;
use Mirakl\MCI\Shop\Request\Product\DownloadProductImportTransformedFileRequest;
use Mirakl\MCI\Shop\Request\Product\ProductImportRequest;
use Mirakl\MCI\Shop\Request\Product\ProductImportStatusesRequest;
use Mirakl\MCI\Shop\Request\Product\ProductImportStatusRequest;
use Mirakl\MCI\Shop\Request\ValueList\GetValueListItemsRequest;
use Mirakl\MCI\Shop\Request\ValueList\GetValueListsItemsRequest;

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
 */
class ShopApiClient extends AbstractApiClient
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
}