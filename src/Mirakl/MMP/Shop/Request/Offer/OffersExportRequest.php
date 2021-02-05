<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\Common\Request\Offer\AbstractOffersExportFileRequest;
use Mirakl\MMP\Shop\Domain\Collection\Offer\ExportOfferCollection;

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
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\OffersExportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new OffersExportRequest();
 * $request->setIncludeInactiveOffers(true);
 *
 * $result = $api->exportOffers($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Offer\ExportOfferCollection;
 *
 * </code>
 */
class OffersExportRequest extends AbstractOffersExportFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\CsvCollection(ExportOfferCollection::class);
    }
}