<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\AttributeProductFeed;

/**
 * @method AttributeProductFeed current()
 * @method AttributeProductFeed first()
 * @method AttributeProductFeed get($offset)
 * @method AttributeProductFeed offsetGet($offset)
 * @method AttributeProductFeed last()
 */
class AttributeProductFeedCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AttributeProductFeed::class;
}