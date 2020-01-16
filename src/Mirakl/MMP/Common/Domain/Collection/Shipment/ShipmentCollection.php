<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\Shipment;

/**
 * @method  Shipment    current()
 * @method  Shipment    first()
 * @method  Shipment    get($offset)
 * @method  Shipment    offsetGet($offset)
 * @method  Shipment    last()
 */
class ShipmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Shipment::class;
}