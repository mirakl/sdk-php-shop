<?php
namespace Mirakl\MMP\FrontOperator\Request\Promotion;

use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\FrontOperator\Domain\Collection\Promotion\PromotionOffersMappingCollection;

/**
 * (PR51) Get a CSV file listing the promotions associated with offers
 *
 * NB: This is the same API call that
 * @see     PromotionOffersMappingFileRequest
 * but with the CSV file having been parsed
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Promotion\PromotionOffersMappingFileRequest;
 *
 * $request = new PromotionOffersMappingFileRequest($this->createDateTime('2017-10-15 10:15:12'));
 * $result = $api->exportPromotionOffersMapping($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Promotion\PromotionOffersMappingCollection
 * </code>
 */
class PromotionOffersMappingRequest extends PromotionOffersMappingFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\CsvCollection(PromotionOffersMappingCollection::class);
    }
}