<?php
namespace Mirakl\MMP\FrontOperator\Request\Promotion;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (PR51) Get a CSV file listing the promotions associated with offers
 *
 * Offers are sorted by id in ascending order
 * Returns CSV diff file with:
 * offer-id;shop-id;trigger-promotion-ids;reward-promotion-ids
 *
 * @method  \DateTime   getLastRequestDate()
 *
 * The last request date. If provided, only the lines that has changed since this date will be returned.
 * @method  $this       setLastRequestDate(\DateTime $lastRequestDate)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Promotion\PromotionOffersMappingFileRequest;
 *
 * $request = new PromotionOffersMappingFileRequest($this->createDateTime('2017-10-15 10:15:12'));
 * $result = $api->exportPromotionOffersMapping($request);
 * // $result => @see \Mirakl\Core\FileWrapper
 * </code>
 */
class PromotionOffersMappingFileRequest extends AbstractRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/promotions/offers';

    /**
     * @var array
     */
    public $queryParams = ['last_request_date'];

    /**
     * @param   string|\Datetime    $lastRequestDate
     */
    public function __construct($lastRequestDate = null)
    {
        parent::__construct();
        if (null !== $lastRequestDate) {
            $this->setLastRequestDate($lastRequestDate);
        }
    }
}