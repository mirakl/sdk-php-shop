<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOffer;

/**
 * @method  AsyncExportOffer  current()
 * @method  AsyncExportOffer  first()
 * @method  AsyncExportOffer  get($offset)
 * @method  AsyncExportOffer  offsetGet($offset)
 * @method  AsyncExportOffer  last()
 */
class AsyncExportOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOffer::class;
}