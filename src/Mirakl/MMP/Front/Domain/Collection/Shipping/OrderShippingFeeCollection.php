<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\OrderShippingFee;

/**
 * @method  OrderShippingFee current()
 * @method  OrderShippingFee first()
 * @method  OrderShippingFee get($offset)
 * @method  OrderShippingFee offsetGet($offset)
 * @method  OrderShippingFee last()
 */
class OrderShippingFeeCollection extends MiraklCollection
{
    /**
     * List of offers in error. It can be because offers are not found, are not available to shipping for the
     * provided shipping type nor shipping zone
     *
     * @var ShippingFeeErrorCollection
     */
    protected $errors;

    /**
     * @var string
     */
    protected $itemClass = OrderShippingFee::class;

    /**
     * @return  ShippingFeeErrorCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param   array   $errors
     * @return  $this
     */
    public function setErrors(array $errors)
    {
        $this->errors = new ShippingFeeErrorCollection($errors);

        return $this;
    }
}