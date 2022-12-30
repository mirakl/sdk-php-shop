<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (ST12) List items to ship (this resource supports seek pagination)
 *
 * @method  array     getOrderIds()
 * @method  $this     setOrderIds(array $orderIds)
 * @method  string[]  getFulfillmentCenterCodes()
 * @method  $this     setFulfillmentCenterCodes(string[] $fulfillmentCenterCodes)
 * @method  \DateTime getShippingDateFrom()
 * @method  $this     setShippingDateFrom(\DateTime $shippingDateFrom)
 * @method  \DateTime getShippingDateTo()
 * @method  $this     setShippingDateTo(\DateTime $shippingDateTo)
 */
abstract class AbstractGetItemsToShipRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipments/items_to_ship';

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'order_id',
        'fulfillment_center_code'
    ];

    /**
     * @var array
     */
    public $queryParams = [
        'order_ids'                => 'order_id',
        'fulfillment_center_codes' => 'fulfillment_center_code',
        'shipping_date_from'       => 'shipping_date_from',
        'shipping_date_to'         => 'shipping_date_to',
    ];

    /**
     * @param   string  $orderId
     * @return  $this
     */
    public function addOrderId($orderId)
    {
        if (!$this->getOrderIds()) {
            return $this->setOrderIds([$orderId]);
        }

        $orderIds = (array) $this->getOrderIds();
        $orderIds[] = $orderId;

        return $this->setOrderIds($orderIds);
    }

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