<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\ProductFeed;

/**
 * @method ProductFeed current()
 * @method ProductFeed first()
 * @method ProductFeed get($offset)
 * @method ProductFeed offsetGet($offset)
 * @method ProductFeed last()
 */
class ProductFeedCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductFeed::class;
}