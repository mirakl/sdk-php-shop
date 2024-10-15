<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * @method array    getChannelCodes()
 * @method $this    setChannelCodes(array $channelCodes)
 * @method string[] getIncludeFields()
 * @method $this    setIncludeFields(string[] $includeFields)
 * @method bool     getIncludeInactiveOffers()
 * @method $this    setIncludeInactiveOffers(bool $includeInactiveOffers)
 * @method bool     isIncludeInactiveOffers()
 * @method string[] getModels()
 * @method $this    setModels(string[] $models)
 * @method string[] getShippingZones()
 * @method $this    setShippingZones(string[] $shippingZones)
 *
 * setIncludeInactiveOffers method can be used only if last_request_date is not specified.
 * If true, active offers as well as inactive offers are returned.
 * If false or not specified, only active offers are returned.
 * @method \DateTime getLastRequestDate()
 *
 * If the lastRequestDate param is not set the API returns all the active offers.
 * If this param is set, the export returns the active and inactive offers since the last API call.
 * For inactive offers, the "active" field is set to "false" and only the "offer-id" and "product-sku"
 * fields are specified.
 * @method $this setLastRequestDate(\DateTime $lastRequestDate)
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
        'channel_codes',
        'include_fields',
        'include_inactive_offers',
        'last_request_date',
        'models',
        'shipping_zones'
    ];

    /**
     * @param string|\Datetime $lastRequestDate
     */
    public function __construct($lastRequestDate = null)
    {
        parent::__construct();

        if (null !== $lastRequestDate) {
            $this->setLastRequestDate($lastRequestDate);
        }
    }
}
