<?php
namespace Mirakl\MMP\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\DiscountRange;

/**
 * @method  DiscountRange   current()
 * @method  DiscountRange   first()
 * @method  DiscountRange   get($offset)
 * @method  DiscountRange   offsetGet($offset)
 * @method  DiscountRange   last()
 */
class DiscountRangeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DiscountRange::class;

    /**
     * Returns ranges as string
     *
     * @return  string
     */
    public function __toString()
    {
        return \Mirakl\tuples_to_query_param($this->toArray());
    }
}