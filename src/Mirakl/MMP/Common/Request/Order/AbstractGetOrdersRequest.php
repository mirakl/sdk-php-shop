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
 * @method  string[]    getChannelCodes()
 * @method  $this       setChannelCodes(string[] $channelCodes)
 * @method  bool        getCustomerDebited()
 * @method  $this       setCustomerDebited(bool $customerDebited)
 * @method  \DateTime   getEndUpdateDate()
 * @method  $this       setEndUpdateDate(\DateTime $endUpdateDate)
 * @method  string[]    getFulfillmentCenterCodes()
 * @method  $this       setFulfillmentCenterCodes(string[] $fulfillmentCenterCodes)
 * @method  bool        getHasIncident()
 * @method  $this       setHasIncident(bool $hasIncident)
 * @method  bool        getOnlyNullChannel()
 * @method  $this       setOnlyNullChannel(bool $onlyNullChannel)
 * @method  string[]    getOrderIds()
 * @method  $this       setOrderIds(string[] $ids)
 * @method  string[]    getOrderReferencesForCustomer()
 * @method  $this       setOrderReferencesForCustomer(string[] $orderReferencesForCustomer)
 * @method  string[]    getOrderReferencesForSeller()
 * @method  $this       setOrderReferencesForSeller(string[] $orderReferencesForSeller)
 * @method  string[]    getOrderStates()
 * @method  $this       setOrderStates(string[] $orderStates)
 * @method  string      getOrderTaxMode()
 * @method  $this       setOrderTaxMode(string $orderTaxMode)
 * @method  string      getPaymentWorkflow()
 * @method  $this       setPaymentWorkflow(string $paymentWorkflow)
 * @method  \DateTime   getStartUpdateDate()
 * @method  $this       setStartUpdateDate(\DateTime $startUpdateDate)
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
        'channel_codes',
        'customer_debited',
        'end_update_date',
        'fulfillment_center_codes' => 'fulfillment_center_code',
        'has_incident',
        'only_null_channel',
        'order_ids',
        'order_states' => 'order_state_codes',
        'order_tax_mode',
        'payment_workflow',
        'start_update_date',
        'order_references_for_customer',
        'order_references_for_seller',
    ];

    /**
     * @var array
     */
    protected $duplicatedQueryParams = ['fulfillment_center_code'];

    /**
     * @param   string  $fulfillmentCenterCode
     * @return  $this
     */
    public function addFulfillmentCenterCode($fulfillmentCenterCode)
    {
        if (!$this->getFulfillmentCenterCodes()) {
            return $this->setFulfillmentCenterCodes([$fulfillmentCenterCode]);
        }

        $fulfillmentCenterCodes = (array) $this->getFulfillmentCenterCodes();
        $fulfillmentCenterCodes[] = $fulfillmentCenterCode;

        return $this->setFulfillmentCenterCodes($fulfillmentCenterCodes);
    }
}