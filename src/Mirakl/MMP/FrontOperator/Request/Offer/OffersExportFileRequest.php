<?php
namespace Mirakl\MMP\FrontOperator\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (OF51) Get a CSV file with the offers updated and deleted since the last request date
 *
 * <p>
 * If offers have additional fields, a column is added at the end of csv for each existing
 * additional field with as header the code of the additional field.
 * </p>
 * <p>
 * Returns CSV diff file with:
 * offer-id;product-sku;min-shipping-price;min-shipping-price-additional;
 * min-shipping-zone;min-shipping-type;price;total-price;price-additional-info;quantity;description;
 * state-code;shop-id;shop-name;professional;premium;logistic-class;active;favorite-rank;channels;
 * deleted;origin-price;discount-start-date;discount-end-date;available-start-date;available-end-date;currency-iso-code
 * </p>
 *
 * @method  array       getChannelCodes()
 * @method  $this       setChannelCodes(array $channelCodes)
 * @method  bool        isIncludeInactiveOffers()
 * @method  $this       setIncludeInactiveOffers(bool $includeInactiveOffers)
 *  
 * setIncludeInactiveOffers method can be used only if last_request_date is not specified.
 * If true, active offers as well as inactive offers are returned.
 * If false or not specified, only active offers are returned.
 * If false or not specified, only active offers are returned.
 * 
 * @method  \DateTime   getLastRequestDate()
 *
 * If the lastRequestDate param is not set the API returns all the active offers.
 * If this params is set the export returns the active and inactive offers since the last API call.
 * For inactive offers, the "active" field is set to "false" and only the "offer-id" and "product-sku"
 * fields are specified.
 * @method  $this       setLastRequestDate(\DateTime $lastRequestDate)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Offer\OffersExportFileRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new OffersExportFileRequest();
 * $request->setIncludeInactiveOffers(true);
 *
 * $result = $this->api->exportOffersToFile($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper;
 *
 * </code>
 */
class OffersExportFileRequest extends AbstractRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/offers/export';

    /**
     * @var array
     */
    public $queryParams = ['last_request_date', 'channel_codes', 'include_inactive_offers'];

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