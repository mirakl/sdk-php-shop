<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\ProductFeedImportItem;

/**
 * @method ProductFeedImportItem current()
 * @method ProductFeedImportItem first()
 * @method ProductFeedImportItem get($offset)
 * @method ProductFeedImportItem offsetGet($offset)
 * @method ProductFeedImportItem last()
 */
class ProductFeedImportItemCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductFeedImportItem::class;
}