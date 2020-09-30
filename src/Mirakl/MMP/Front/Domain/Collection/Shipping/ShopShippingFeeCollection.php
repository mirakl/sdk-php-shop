<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\ShopShippingFee;

/**
 * @method  ShopShippingFee current()
 * @method  ShopShippingFee first()
 * @method  ShopShippingFee get($offset)
 * @method  ShopShippingFee offsetGet($offset)
 * @method  ShopShippingFee last()
 */
class ShopShippingFeeCollection extends MiraklCollection
{
    /**
     * List of offers ID that are not found or not available to shipping.
     *
     * @var array
     */
    protected $offersNotFound = [];

    /**
     * @var string
     */
    protected $itemClass = ShopShippingFee::class;

    /**
     * @return  array
     */
    public function getOffersNotFound()
    {
        return $this->offersNotFound;
    }

    /**
     * @param   array   $offersNotFound
     * @return  $this
     */
    public function setOffersNotFound(array $offersNotFound)
    {
        $this->offersNotFound = $offersNotFound;

        return $this;
    }
}