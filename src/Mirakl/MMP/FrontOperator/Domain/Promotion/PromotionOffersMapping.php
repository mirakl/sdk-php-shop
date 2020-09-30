<?php
namespace Mirakl\MMP\FrontOperator\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  int     getOfferId()
 * @method  $this   setOfferId(string $offerId)
 * @method  array   getRewardPromotionIds()
 * @method  int     getShopId()
 * @method  $this   setShopId(string $shopId)
 * @method  array   getTriggerPromotionIds()
 */
class PromotionOffersMapping extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer-id'              => 'offer_id',
        'shop-id'               => 'shop_id',
        'trigger-promotion-ids' => 'trigger_promotion_ids',
        'reward-promotion-ids'  => 'reward_promotion_ids'
    ];

    /**
     * @param array|string $triggerPromotionIds
     * @return $this
     */
    function setTriggerPromotionIds($triggerPromotionIds) {
        if (!is_array($triggerPromotionIds))
            $this->setData('trigger_promotion_ids',explode(',',$triggerPromotionIds));
        else
            $this->setData('trigger_promotion_ids',$triggerPromotionIds);

        return $this;
    }

    /**
     * @param array|string $rewardPromotionIds
     * @return $this
     */
    function setRewardPromotionIds($rewardPromotionIds) {
        if (!is_array($rewardPromotionIds))
            $this->setData('reward_promotion_ids',explode(',',$rewardPromotionIds));
        else
            $this->setData('reward_promotion_ids',$rewardPromotionIds);

        return $this;
    }
}