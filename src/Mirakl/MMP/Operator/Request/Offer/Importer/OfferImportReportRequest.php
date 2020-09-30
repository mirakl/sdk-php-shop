<?php
namespace Mirakl\MMP\Operator\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportReportRequest;

/**
 * (OF02) Get import information and stats
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportReportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new OfferImportReportRequest('IMPORT_ID');
 * $result = $api->getOffersImportResult($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult
 * </code>
 */
class OfferImportReportRequest extends AbstractOfferImportReportRequest
{}