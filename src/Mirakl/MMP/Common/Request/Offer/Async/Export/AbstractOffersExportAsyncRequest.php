<?php
namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\OffersExportAsyncTrackingResult;

/**
 * @method  string[]    getChannelCodes()
 * @method  $this       setChannelCodes(string[] $channelCodes)
 * @method  string      getExportType()
 * @method  $this       setExportType(string $exportType)
 * @method  string[]    getIncludeFields()
 * @method  $this       setIncludeFields(string[] $includeFields)
 * @method  bool        getIncludeInactiveOffers()
 * @method  $this       setIncludeInactiveOffers(bool $includeInactiveOffers)
 * @method  int         getItemsPerChunk()
 * @method  $this       setItemsPerChunk(int $itemsPerChunk)
 * @method  \DateTime   getLastRequestDate()
 * @method  $this       setLastRequestDate(\DateTime $lastRequestDate)
 * @method  int         getMegabytesPerChunk()
 * @method  $this       setMegabytesPerChunk(int $megabytesPerChunk)
 * @method  string[]    getModels()
 * @method  $this       setModels(string[] $models)
 * @method  string      getRenameFields()
 * @method  $this       setRenameFields(string $renameFields)
 * @method  string[]    getShippingZones()
 * @method  $this       setShippingZones(string[] $shippingZones)
 */
abstract class AbstractOffersExportAsyncRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/offers/export/async';

    /**
     * @var array
     */
    public $bodyParams = [
        'channel_codes',
        'export_type',
        'include_fields',
        'include_inactive_offers',
        'items_per_chunk',
        'last_request_date',
        'megabytes_per_chunk',
        'rename_fields',
        'shipping_zones'
    ];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->setExportType('text/csv'); // default export type
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OffersExportAsyncTrackingResult::decorator();
    }
}