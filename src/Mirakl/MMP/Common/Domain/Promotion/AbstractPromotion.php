<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionChannelCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\PromotionPublicDescriptionCollection;

/**
 * @method  float                                   getAmountOff()
 * @method  $this                                   setAmountOff(float $amountOff)
 * @method  PromotionChannelCollection              getChannels()
 * @method  $this                                   setChannels(PromotionChannelCollection $channels)
 * @method  \DateTime                               getDateCreated()
 * @method  $this                                   setDateCreated(\DateTime $dateCreated)
 * @method  int                                     getFreeItemsQuantity()
 * @method  $this                                   setFreeItemsQuantity(int $freeItemsQty)
 * @method  string                                  getInternalDescription()
 * @method  $this                                   setInternalDescription(string $internalDescription)
 * @method  string                                  getInternalId()
 * @method  $this                                   setInternalId(string $internalId)
 * @method  PromotionMediaCollection                getMedia()
 * @method  $this                                   setMedia(PromotionMediaCollection|array $media)
 * @method  float                                   getPercentageOff()
 * @method  $this                                   setPercentageOff(float $percentageOff)
 * @method  PromotionPublicDescriptionCollection    getPublicDescriptions()
 * @method  $this                                   setPublicDescriptions(PromotionPublicDescriptionCollection|array $publicDescriptions)
 * @method  string                                  getState()
 * @method  $this                                   setState(string $state)
 * @method  string                                  getType()
 * @method  $this                                   setType(string $type)
 * @method  boolean                                 isRewardOnPurchasedItems()
 * @method  $this                                   setRewardOnPurchasedItems(boolean $rewardOnPurchasedItems)
 */
abstract class AbstractPromotion extends MiraklObject
{
    use DateRangeTrait;

    const TYPE_PERCENTAGE_OFF = 'PERCENTAGE_OFF';
    const TYPE_AMOUNT_OFF     = 'AMOUNT_OFF';
    const TYPE_FREE_ITEMS     = 'FREE_ITEMS';

    const STATE_ACTIVE  = 'ACTIVE';  // The promotion is within its availability date
    const STATE_PENDING = 'PENDING'; // The promotion is not yet active
    const STATE_EXPIRED = 'EXPIRED'; // The promotion is not active anymore

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
        'public_descriptions' => [PromotionPublicDescriptionCollection::class, 'create'],
        'media'               => [PromotionMediaCollection::class, 'create'],
        'channels'            => [PromotionChannelCollection::class, 'create']
    ];
}