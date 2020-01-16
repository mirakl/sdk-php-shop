<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;

/**
 * (ST11) List shipments (this resource supports seek pagination)
 *
 * @method  array   getShipmentStateCodes()
 * @method  $this   setShipmentStateCodes(array $shipmentStateCodes)
 * @method  array   getOrderIds()
 * @method  $this   setOrderIds(array $ids)
 */
abstract class AbstractGetShipmentsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipments';

    /**
     * @var bool
     */
    protected $queryParamsDuplicated = true;

    /**
     * @var array
     */
    public $queryParams = [
        'order_ids' => 'order_id',
        'shipment_state_codes' => 'shipment_state_code',
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
     * @param   string  $stateCode
     * @return  $this
     */
    public function addShipmentStateCode($stateCode)
    {
        if (!$this->getShipmentStateCodes()) {
            return $this->setShipmentStateCodes([$stateCode]);
        }

        $stateCodes = (array) $this->getShipmentStateCodes();
        $stateCodes[] = $stateCode;

        return $this->setShipmentStateCodes($stateCodes);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(ShipmentCollection::class, 'data');
    }
}