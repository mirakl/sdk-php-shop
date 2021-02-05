<?php
namespace Mirakl\MMP\Common\Request\Order;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (OR11) Retrieve orders
 *
 * Sort by creation date, order identifier, shop name and then by index of the order line
 * This API uses pagination by default and will return 10 orders
 *
 * @method  array       getChannelCodes()
 * @method  $this       setChannelCodes(array $channelCodes)
 * @method  bool        getCustomerDebited()
 * @method  $this       setCustomerDebited(bool $customerDebited)
 * @method  bool        getHasIncident()
 * @method  $this       setHasIncident(bool $hasIncident)
 * @method  bool        getOnlyNullChannel()
 * @method  $this       setOnlyNullChannel(bool $onlyNullChannel)
 * @method  array       getOrderIds()
 * @method  $this       setOrderIds(array $ids)
 * @method  array       getOrderStates()
 * @method  $this       setOrderStates(array $orderStates)
 * @method  string      getPaymentWorkflow()
 * @method  $this       setPaymentWorkflow(string $paymentWorkflow)
 * @method  \DateTime   getStartUpdateDate()
 * @method  $this       setStartUpdateDate(\DateTime $startUpdateDate)
 * @method  \DateTime   getEndUpdateDate()
 * @method  $this       setEndUpdateDate(\DateTime $endUpdateDate)
 */
abstract class AbstractGetOrdersRequest extends AbstractRequest
{
    use DateRangeTrait;
    use LocalizableTrait;
    use PageableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/orders';

    /**
     * @var array
     */
    public $queryParams = [
        'order_ids',
        'order_states' => 'order_state_codes',
        'start_update_date',
        'end_update_date',
        'channel_codes',
        'customer_debited',
        'payment_workflow',
        'only_null_channel',
        'has_incident',
    ];
}