<?php
namespace Mirakl\MMP\Common\Domain\Offer\Price;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Price\VolumePricesCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferPriceContext;

/**
 * @method  string                       getChannelCode()
 * @method  $this                        setChannelCode(string $channelCode)
 * @method  AsyncExportOfferPriceContext getContext()
 * @method  $this                        setContext(AsyncExportOfferPriceContext $context)
 * @method  \DateTime                    getDiscountEndDate()
 * @method  $this                        setDiscountEndDate(\DateTime $discountEndDate)
 * @method  \DateTime                    getDiscountStartDate()
 * @method  $this                        setDiscountStartDate(\DateTime $discountStartDate)
 * @method  float                        getPrice()
 * @method  $this                        setPrice(float $price)
 * @method  float                        getUnitDiscountPrice()
 * @method  $this                        setUnitDiscountPrice(float $unitDiscountPrice)
 * @method  float                        getUnitOriginPrice()
 * @method  $this                        setUnitOriginPrice(float $unitOriginPrice)
 * @method  VolumePricesCollection       getVolumePrices()
 * @method  $this                        setVolumePrices(array|VolumePricesCollection $volumePrices)
 */
class OfferPricing extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'context'       => [AsyncExportOfferPriceContext::class, 'create'],
        'volume_prices' => [VolumePricesCollection::class, 'create']
    ];
}
