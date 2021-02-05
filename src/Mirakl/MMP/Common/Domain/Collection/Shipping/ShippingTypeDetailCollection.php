<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeDetail;

/**
 * @method  ShippingTypeDetail  current()
 * @method  ShippingTypeDetail  first()
 * @method  ShippingTypeDetail  get($offset)
 * @method  ShippingTypeDetail  offsetGet($offset)
 * @method  ShippingTypeDetail  last()
 */
class ShippingTypeDetailCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingTypeDetail::class;
}