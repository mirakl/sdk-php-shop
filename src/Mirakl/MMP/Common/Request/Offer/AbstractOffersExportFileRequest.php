<?php
namespace Mirakl\MMP\Common\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * @method  array   getChannelCodes()
 * @method  $this   setChannelCodes(array $channelCodes)
 * @method  bool    isIncludeInactiveOffers()
 * @method  $this   setIncludeInactiveOffers(bool $includeInactiveOffers)
 * @method  array   getShippingZones()
 * @method  $this   setShippingZones(array $shippingZones)
 *
 * setIncludeInactiveOffers method can be used only if last_request_date is not specified.
 * If true, active offers as well as inactive offers are returned.
 * If false or not specified, only active offers are returned.
 *
 * @method  \DateTime   getLastRequestDate()
 *
 * If the lastRequestDate param is not set the API returns all the active offers.
 * If this param is set, the export returns the active and inactive offers since the last API call.
 * For inactive offers, the "active" field is set to "false" and only the "offer-id" and "product-sku"
 * fields are specified.
 * @method  $this       setLastRequestDate(\DateTime $lastRequestDate)
 */
abstract class AbstractOffersExportFileRequest extends AbstractRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/offers/export';

    /**
     * @var array
     */
    public $queryParams = [
        'last_request_date',
        'channel_codes',
        'include_inactive_offers',
        'shipping_zones'
    ];

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

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();
        if (isset($params['shipping_zones'])) {
            $params['shipping_zones'] = \Mirakl\tuples_to_query_param($this->getShippingZones());
        }

        return $params;
    }
}