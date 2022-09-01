<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\DeleteShipment;

/**
 * @method  DeleteShipment  current()
 * @method  DeleteShipment  first()
 * @method  DeleteShipment  get($offset)
 * @method  DeleteShipment  offsetGet($offset)
 * @method  DeleteShipment  last()
 */
class DeleteShipmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DeleteShipment::class;
}