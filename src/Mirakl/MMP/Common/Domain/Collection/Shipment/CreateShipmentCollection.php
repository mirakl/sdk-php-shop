<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\CreateShipment;

/**
 * @method  CreateShipment  current()
 * @method  CreateShipment  first()
 * @method  CreateShipment  get($offset)
 * @method  CreateShipment  offsetGet($offset)
 * @method  CreateShipment  last()
 */
class CreateShipmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateShipment::class;
}