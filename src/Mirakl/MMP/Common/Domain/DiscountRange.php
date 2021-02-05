<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getPrice()
 * @method  $this   setPrice(float $price)
 * @method  int     getQuantityThreshold()
 * @method  $this   setQuantityThreshold(int $quantityThreshold)
 */
class DiscountRange extends MiraklObject
{
    /**
     * Need to return exactly 2 elements in this order
     * Useful for method @see DiscountRangeCollection::__toString()
     *
     * @return  array
     */
    public function toArray()
    {
        return [
            'quantity_threshold' => (int) $this->getQuantityThreshold(),
            'price' => sprintf('%.2F', $this->getPrice()),
        ];
    }
}