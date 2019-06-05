<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\Carrier;

/**
 * @method  Carrier current()
 * @method  Carrier first()
 * @method  Carrier get($offset)
 * @method  Carrier offsetGet($offset)
 * @method  Carrier last()
 */
class CarrierCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Carrier::class;
}