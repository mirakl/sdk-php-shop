<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\ProductFeedImportReportItem;

/**
 * @method ProductFeedImportReportItem current()
 * @method ProductFeedImportReportItem first()
 * @method ProductFeedImportReportItem get($offset)
 * @method ProductFeedImportReportItem offsetGet($offset)
 * @method ProductFeedImportReportItem last()
 */
class ProductFeedImportReportItemCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductFeedImportReportItem::class;
}