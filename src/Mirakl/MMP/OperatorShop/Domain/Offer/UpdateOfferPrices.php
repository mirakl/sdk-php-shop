<?php
namespace Mirakl\MMP\OperatorShop\Domain\Offer;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\Offer\UpdateOfferVolumePriceCollection;

/**
 * @method  string                              getChannelCode()
 * @method  $this                               setChannelCode(string $channelCode)
 * @method  \DateTime                           getDiscountStartDate()
 * @method  $this                               setDiscountStartDate(\DateTime $discountStartDate)
 * @method  \DateTime                           getDiscountEndDate()
 * @method  $this                               setDiscountEndDate(\DateTime $discountEndDate)
 * @method  float                               getUnitOriginPrice()
 * @method  $this                               setUnitOriginPrice(float $unitOriginPrice)
 * @method  float                               getUnitDiscountPrice()
 * @method  $this                               setUnitDiscountPrice(float $unitDiscountPrice)
 * @method  UpdateOfferVolumePriceCollection    getVolumePrices()
 * @method  $this                               setVolumePrices (array|UpdateOfferVolumePriceCollection $volumePrices)
 */
class UpdateOfferPrices extends MiraklObject
{
    use DateRangeTrait;

    /**
     * @var array
     */
    protected static $mapping = [
        'discount_start_date' => 'start_date',
        'discount_end_date' => 'end_date',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'volume_prices' => [UpdateOfferVolumePriceCollection::class, 'create'],
    ];
}
