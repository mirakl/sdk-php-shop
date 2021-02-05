<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\UpdateOfferVolumePrices;

/**
 * @method  UpdateOfferVolumePrices current()
 * @method  UpdateOfferVolumePrices first()
 * @method  UpdateOfferVolumePrices get($offset)
 * @method  UpdateOfferVolumePrices offsetGet($offset)
 * @method  UpdateOfferVolumePrices last()
 */
class UpdateOfferVolumePriceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOfferVolumePrices::class;
}
