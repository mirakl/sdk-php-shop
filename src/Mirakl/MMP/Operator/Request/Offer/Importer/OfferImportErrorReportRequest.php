<?php
namespace Mirakl\MMP\Operator\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportErrorReportRequest;

/**
 * (OF03) Get error report file for an offer import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportErrorReportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new OfferImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getOffersImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * </code>
 */
class OfferImportErrorReportRequest extends AbstractOfferImportErrorReportRequest
{}