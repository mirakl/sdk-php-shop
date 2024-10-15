<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionApplicationToCartCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionChannelCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionPublicDescriptionCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionTriggerCollection;

/**
 * @method float                                getAmountOff()
 * @method $this                                setAmountOff(float $amountOff)
 * @method PromotionApplicationToCartCollection getApplicationToCart()
 * @method $this                                setApplicationToCart(PromotionApplicationToCartCollection|array $applicationToCart)
 * @method PromotionCampaign                    getCampaign()
 * @method $this                                setCampaign(PromotionCampaign $campaign)
 * @method PromotionChannelCollection           getChannels() Channels on which the promotion applied. If none, promotion applied on all channels
 * @method $this                                setChannels(PromotionChannelCollection $channels)
 * @method \DateTime                            getDateCreated()
 * @method $this                                setDateCreated(\DateTime $dateCreated)
 * @method int                                  getFreeItemsQuantity()
 * @method $this                                setFreeItemsQuantity(int $freeItemsQuantity)
 * @method string                               getInternalDescription()
 * @method $this                                setInternalDescription(string $internalDescription)
 * @method string                               getInternalId()
 * @method $this                                setInternalId(string $internalId)
 * @method \DateTime                            getLastUpdated()
 * @method $this                                setLastUpdated(\DateTime $lastUpdated)
 * @method int                                  getMaxQuantityToDiscount() Maximum quantity of items on which a percentage off discount applies. Only applicable when promotion is of type PERCENTAGE_OFF, null otherwise
 * @method $this                                setMaxQuantityToDiscount(int $maxQuantityToDiscount)
 * @method PromotionMediaCollection             getMedia()
 * @method $this                                setMedia(PromotionMediaCollection|array $media)
 * @method float                                getPercentageOff()
 * @method $this                                setPercentageOff(float $percentageOff)
 * @method PromotionPublicDescriptionCollection getPublicDescriptions()
 * @method $this                                setPublicDescriptions(PromotionPublicDescriptionCollection|array $publicDescriptions)
 * @method bool                                 getRewardOnPurchasedItems()
 * @method $this                                setRewardOnPurchasedItems(boolean $rewardOnPurchasedItems)
 * @method bool                                 isRewardOnPurchasedItems()
 * @method string                               getState()
 * @method $this                                setState(string $state)
 * @method PromotionTriggerCollection           getTriggers()
 * @method $this                                setTriggers(PromotionTriggerCollection|array $triggers)
 * @method string                               getType()
 * @method $this                                setType(string $type)
 */
abstract class AbstractPromotion extends MiraklObject
{
    use DateRangeTrait;

    public const TYPE_PERCENTAGE_OFF = 'PERCENTAGE_OFF';
    public const TYPE_AMOUNT_OFF     = 'AMOUNT_OFF';
    public const TYPE_FREE_ITEMS     = 'FREE_ITEMS';
    public const STATE_ACTIVE        = 'ACTIVE';           // The promotion is within its availability date
    public const STATE_PENDING       = 'PENDING';          // The promotion is not yet active
    public const STATE_EXPIRED       = 'EXPIRED';          // The promotion is not active anymore
    public const PENDING_APPROVAL    = 'PENDING_APPROVAL'; // The promotion is waiting for approval
    public const REJECTED            = 'REJECTED';         // The promotion has been rejected

    /**
     * @var array
     */
    protected static $mapping = [
        'medias' => 'media',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'application_to_cart' => [PromotionApplicationToCartCollection::class, 'create'],
        'campaign'            => [PromotionCampaign::class, 'create'],
        'channels'            => [PromotionChannelCollection::class, 'create'],
        'media'               => [PromotionMediaCollection::class, 'create'],
        'public_descriptions' => [PromotionPublicDescriptionCollection::class, 'create'],
        'triggers'            => [PromotionTriggerCollection::class, 'create'],
    ];
}
