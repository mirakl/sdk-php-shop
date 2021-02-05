<?php
namespace Mirakl\MMP\Shop\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportReportRequest;

/**
 * (OF02) Get import information and stats
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new OfferImportReportRequest('IMPORT_ID');
 * $result = $api->getOffersImportResult($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult
 * </code>
 */
class OfferImportReportRequest extends AbstractOfferImportReportRequest
{}