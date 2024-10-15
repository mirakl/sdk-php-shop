<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Pricing\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Pricing\Importer\AbstractOfferPricingsImportErrorReportRequest;

/**
 * (PRI03) Get the error report for a price import in CSV format
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Pricing\Importer\OfferPricingsImportErrorReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new OfferPricingsImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getOfferPricingsImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * </code>
 */
class OfferPricingsImportErrorReportRequest extends AbstractOfferPricingsImportErrorReportRequest
{
}
