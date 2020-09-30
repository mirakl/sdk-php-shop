<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Offer;

/**
 * @method  Offer   current()
 * @method  Offer   first()
 * @method  Offer   get($offset)
 * @method  Offer   offsetGet($offset)
 * @method  Offer   last()
 */
class OfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Offer::class;
}