<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferVolumePriceCollection;

/**
 * @method  AsyncExportOfferPriceContext            getContext()
 * @method  $this                                   setContext(AsyncExportOfferPriceContext $context)
 * @method  float                                   getOriginPrice()
 * @method  $this                                   setOriginPrice(float $originPrice)
 * @method  float                                   getDiscountPrice()
 * @method  $this                                   setDiscountPrice(float $discountPrice)
 * @method  \DateTime                               getDiscountEndDate()
 * @method  $this                                   setDiscountEndDate(\DateTime $discountEndDate)
 * @method  \DateTime                               getDiscountStartDate()
 * @method  $this                                   setDiscountStartDate(\DateTime $discountStartDate)
 * @method  AsyncExportOfferVolumePriceCollection   getVolumePrices()
 * @method  $this                                   setVolumePrices(AsyncExportOfferVolumePriceCollection $volumePrices)
 */
class AsyncExportOfferPrice extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'context'       => [AsyncExportOfferPriceContext::class, 'create'],
        'volume_prices' => [AsyncExportOfferVolumePriceCollection::class, 'create'],
    ];
}