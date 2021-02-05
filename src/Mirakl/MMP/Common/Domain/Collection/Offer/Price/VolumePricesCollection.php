<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Price;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Price\VolumePrice;

/**
 * @method  VolumePrice  current()
 * @method  VolumePrice  first()
 * @method  VolumePrice  get($offset)
 * @method  VolumePrice  offsetGet($offset)
 * @method  VolumePrice  last()
 */
class VolumePricesCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = VolumePrice::class;
}