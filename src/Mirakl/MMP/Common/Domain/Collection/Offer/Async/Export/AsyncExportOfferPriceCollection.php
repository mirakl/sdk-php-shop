<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferPrice;

/**
 * @method  AsyncExportOfferPrice  current()
 * @method  AsyncExportOfferPrice  first()
 * @method  AsyncExportOfferPrice  get($offset)
 * @method  AsyncExportOfferPrice  offsetGet($offset)
 * @method  AsyncExportOfferPrice  last()
 */
class AsyncExportOfferPriceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferPrice::class;
}