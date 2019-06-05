<?php
namespace Mirakl\MMP\Shop\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportErrorReportRequest;

/**
 * (OF03) Get error report file for an offer import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportErrorReportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new OfferImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getOffersImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * </code>
 */
class OfferImportErrorReportRequest extends AbstractOfferImportErrorReportRequest
{}