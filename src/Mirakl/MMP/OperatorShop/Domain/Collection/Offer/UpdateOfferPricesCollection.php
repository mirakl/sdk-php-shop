<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\UpdateOfferPrices;

/**
 * @method  UpdateOfferPrices current()
 * @method  UpdateOfferPrices first()
 * @method  UpdateOfferPrices get($offset)
 * @method  UpdateOfferPrices offsetGet($offset)
 * @method  UpdateOfferPrices last()
 */
class UpdateOfferPricesCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOfferPrices::class;
}
