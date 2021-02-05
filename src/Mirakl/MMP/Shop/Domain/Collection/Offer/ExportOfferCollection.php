<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Offer\ExportOffer;

/**
 * @method  ExportOffer current()
 * @method  ExportOffer first()
 * @method  ExportOffer get($offset)
 * @method  ExportOffer offsetGet($offset)
 * @method  ExportOffer last()
 */
class ExportOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ExportOffer::class;
}