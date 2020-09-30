<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\ShippingFeeError;

/**
 * @method  ShippingFeeError current()
 * @method  ShippingFeeError first()
 * @method  ShippingFeeError get($offset)
 * @method  ShippingFeeError offsetGet($offset)
 * @method  ShippingFeeError last()
 */
class ShippingFeeErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingFeeError::class;
}