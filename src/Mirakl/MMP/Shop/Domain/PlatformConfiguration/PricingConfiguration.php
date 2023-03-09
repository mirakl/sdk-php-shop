<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getChannelPricingModel() // Allow sellers to create prices applicable on the operator’s different storefronts materialized as sales channels in Mirakl
 * @method $this  setChannelPricingModel(string $channelPricingModel)
 * @method bool   getIsScheduledPricing() // Allow sellers to set up multiple prices in advance
 * @method $this  setIsScheduledPricing(bool $isScheduledPricing)
 * @method bool   getIsVolumePricing() // Allow pricing for bulk purchases
 * @method $this  setIsVolumePricing(bool $isVolumePricing)
 * @method bool   getIsVolumeDiscount() // Allow discounts for bulk purchases
 * @method $this  setIsVolumeDiscount(bool $isVolumeDiscount)
 */
class PricingConfiguration extends MiraklObject
{
    const CHANNEL_PRICING_MODEL_DISABLED = 'DISABLED';
    const CHANNEL_PRICING_MODEL_SINGLE = 'SINGLE';
    const CHANNEL_PRICING_MODEL_MULTI = 'MULTI';

    /**
     * @var array
     */
    protected static $mapping = [
        'channel_pricing'   => 'channel_pricing_model',
        'scheduled_pricing' => 'is_scheduled_pricing',
        'volume_discount'   => 'is_volume_discount',
        'volume_pricing'    => 'is_volume_pricing',
    ];
}