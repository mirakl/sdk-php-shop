<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentIdentifier;

/**
 * @method  ShipmentIdentifier  current()
 * @method  ShipmentIdentifier  first()
 * @method  ShipmentIdentifier  get($offset)
 * @method  ShipmentIdentifier  offsetGet($offset)
 * @method  ShipmentIdentifier  last()
 */
class ShipmentIdentifierCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentIdentifier::class;
}