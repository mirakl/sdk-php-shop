<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ItemToShipLine;

/**
 * @method  ItemToShipLine    current()
 * @method  ItemToShipLine    first()
 * @method  ItemToShipLine    get($offset)
 * @method  ItemToShipLine    offsetGet($offset)
 * @method  ItemToShipLine    last()
 */
class ItemToShipLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ItemToShipLine::class;
}