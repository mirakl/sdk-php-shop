<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentLine;

/**
 * @method  ShipmentLine    current()
 * @method  ShipmentLine    first()
 * @method  ShipmentLine    get($offset)
 * @method  ShipmentLine    offsetGet($offset)
 * @method  ShipmentLine    last()
 */
class ShipmentLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentLine::class;
}