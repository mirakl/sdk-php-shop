<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentError;

/**
 * @method  ShipmentError   current()
 * @method  ShipmentError   first()
 * @method  ShipmentError   get($offset)
 * @method  ShipmentError   offsetGet($offset)
 * @method  ShipmentError   last()
 */
class ShipmentErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentError::class;
}