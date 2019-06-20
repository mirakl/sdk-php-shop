<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\DiscountRangeCollection;

/**
 * @method  float                   getDiscountPrice()
 * @method  $this                   setDiscountPrice(float $discountPrice)
 * @method  float                   getOriginPrice()
 * @method  $this                   setOriginPrice(float $originPrice)
 * @method  float                   getPrice()
 * @method  $this                   setPrice(float $price)
 * @method  DiscountRangeCollection getRanges()
 */
class Discount extends MiraklObject
{
    use DateRangeTrait;

    /**
     * @param   mixed   $ranges
     * @return  $this
     */
    public function setRanges($ranges)
    {
        if (is_array($ranges)) {
            $ranges = new DiscountRangeCollection($ranges);
        } elseif (is_string($ranges) && !empty($ranges)) {
            $rangesString = $ranges;
            $ranges = new DiscountRangeCollection();
            foreach (explode(',', $rangesString) as $range) {
                list ($qty, $price) = explode('|', $range);
                $ranges->add([
                    'price' => $price,
                    'quantity_threshold' => $qty,
                ]);
            }
        }

        return $this->setData('ranges', $ranges);
    }
}