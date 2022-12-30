<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferVolumePrice;

/**
 * @method  AsyncExportOfferVolumePrice  current()
 * @method  AsyncExportOfferVolumePrice  first()
 * @method  AsyncExportOfferVolumePrice  get($offset)
 * @method  AsyncExportOfferVolumePrice  offsetGet($offset)
 * @method  AsyncExportOfferVolumePrice  last()
 */
class AsyncExportOfferVolumePriceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferVolumePrice::class;
}