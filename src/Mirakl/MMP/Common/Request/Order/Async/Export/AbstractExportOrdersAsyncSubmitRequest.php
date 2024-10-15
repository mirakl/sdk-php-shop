<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Async\Export;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Order\Async\Export\ExportOrdersAsyncSubmitResponse;

/**
 * (OR13) Export orders file asynchronously
 *
 * The export is asynchronous, export status can be retrieved by calling (OR14).
 * You must give at least one date range filter: created or last updated date or refunds created date.
 *
 * @method array     getChannelCodes()
 * @method $this     setChannelCodes(array $channelCodes)
 * @method \DateTime getEndDate()
 * @method $this     setEndDate(\DateTime $endDate)
 * @method \DateTime getEndUpdateDate()
 * @method $this     setEndUpdateDate(\DateTime $endUpdateDate)
 * @method string    getFulfillmentCenterCodes()
 * @method $this     setFulfillmentCenterCodes(string $fulfillmentCenterCodes)
 * @method int       getItemsPerChunk()
 * @method $this     setItemsPerChunk(int $itemsPerChunk)
 * @method int       getMegabytesPerChunk()
 * @method $this     setMegabytesPerChunk(int $megabytesPerChunk)
 * @method bool      getOnlyNullChannel()
 * @method $this     setOnlyNullChannel(bool $onlyNullChannel)
 * @method string[]  getOrderStateCodes()
 * @method $this     setOrderStateCodes(string[] $orderStateCodes)
 * @method string    getOrderTaxMode()
 * @method $this     setOrderTaxMode(string $orderTaxMode)
 * @method \DateTime getStartDate()
 * @method $this     setStartDate(\DateTime $startDate)
 * @method \DateTime getStartUpdateDate()
 * @method $this     setStartUpdateDate(\DateTime $startUpdateDate)
 */
abstract class AbstractExportOrdersAsyncSubmitRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/async-export';

    /**
     * @var array
     */
    public $bodyParams = [
        'channel_codes',
        'end_date',
        'end_update_date',
        'fulfillment_center_codes',
        'items_per_chunk',
        'megabytes_per_chunk',
        'only_null_channel',
        'order_state_codes',
        'order_tax_mode',
        'start_date',
        'start_update_date',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ExportOrdersAsyncSubmitResponse::decorator();
    }
}
