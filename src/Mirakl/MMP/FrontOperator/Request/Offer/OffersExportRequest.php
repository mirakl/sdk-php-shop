<?php
namespace Mirakl\MMP\FrontOperator\Request\Offer;

use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\FrontOperator\Domain\Collection\Offer\ExportOfferCollection;

/**
 * (OF51) Get a list of offers that have been updated and deleted since the last request date
 *
 * NB: This is the same API call that
 * @see     OffersExportFileRequest
 * but with the CSV file having been parsed
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Offer\OffersExportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new OffersExportRequest();
 * $request->setIncludeInactiveOffers(true);
 *
 * $result = $this->api->exportOffers($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Offer\ExportOfferCollection;
 *
 * </code>
 */
class OffersExportRequest extends OffersExportFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\CsvCollection(ExportOfferCollection::class);
    }
}