<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\UpdateOffer;

/**
 * @method  UpdateOffer current()
 * @method  UpdateOffer first()
 * @method  UpdateOffer get($offset)
 * @method  UpdateOffer offsetGet($offset)
 * @method  UpdateOffer last()
 */
class UpdateOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOffer::class;
}