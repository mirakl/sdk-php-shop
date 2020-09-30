<?php
namespace Mirakl\MMP\Front\Domain\Collection\Order\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Order\Create\CreateOrderOffer;

/**
 * @method  CreateOrderOffer    current()
 * @method  CreateOrderOffer    first()
 * @method  CreateOrderOffer    get($offset)
 * @method  CreateOrderOffer    offsetGet($offset)
 * @method  CreateOrderOffer    last()
 */
class CreateOrderOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateOrderOffer::class;
}