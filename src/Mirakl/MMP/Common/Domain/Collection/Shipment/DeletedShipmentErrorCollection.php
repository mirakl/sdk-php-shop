<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\DeletedShipmentError;

/**
 * @method  DeletedShipmentError  current()
 * @method  DeletedShipmentError  first()
 * @method  DeletedShipmentError  get($offset)
 * @method  DeletedShipmentError  offsetGet($offset)
 * @method  DeletedShipmentError  last()
 */
class DeletedShipmentErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DeletedShipmentError::class;
}