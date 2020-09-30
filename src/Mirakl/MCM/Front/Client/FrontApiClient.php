<?php
namespace Mirakl\MCM\Front\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductExportCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationReport;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationStatus;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizeTracking;
use Mirakl\MCM\Front\Request\Catalog\Product\ProductExportCsvRequest;
use Mirakl\MCM\Front\Request\Catalog\Product\ProductExportRequest;
use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationReportRequest;
use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationRequest;
use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationStatusRequest;

/**
 * @method FileWrapper                  exportCsvProducts(ProductExportCsvRequest $request)
 * @method ProductExportCollection      exportProducts(ProductExportRequest $request)
 * @method ProductSynchronizationReport getProductSynchronizationReport(ProductSynchronizationReportRequest $request)
 * @method ProductSynchronizationStatus getProductSynchronizationStatus(ProductSynchronizationStatusRequest $request)
 * @method ProductSynchronizeTracking   synchronizeProduct(ProductSynchronizationRequest $request)
 */
class FrontApiClient extends AbstractApiClient
{}