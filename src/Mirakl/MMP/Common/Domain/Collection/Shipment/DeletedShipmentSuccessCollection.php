<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\DeletedShipmentSuccess;

/**
 * @method  DeletedShipmentSuccess  current()
 * @method  DeletedShipmentSuccess  first()
 * @method  DeletedShipmentSuccess  get($offset)
 * @method  DeletedShipmentSuccess  offsetGet($offset)
 * @method  DeletedShipmentSuccess  last()
 */
class DeletedShipmentSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DeletedShipmentSuccess::class;
}