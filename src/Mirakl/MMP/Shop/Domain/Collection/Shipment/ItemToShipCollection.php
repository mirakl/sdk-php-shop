<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Shipment\ItemToShip;

class ItemToShipCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ItemToShip::class;
}