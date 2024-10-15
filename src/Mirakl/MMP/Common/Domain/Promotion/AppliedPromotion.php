<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool                   getApportioned()
 * @method $this                  setApportioned(bool $apportioned)
 * @method bool                   isApportioned()
 * @method PromotionCampaign      getCampaign()
 * @method $this                  setCampaign(PromotionCampaign|array $campaign)
 * @method PromotionConfiguration getConfiguration()
 * @method $this                  setConfiguration(PromotionConfiguration|array $configuration)
 * @method float                  getDeducedAmount()
 * @method $this                  setDeducedAmount(float $deducedAmount)
 * @method string                 getId()
 * @method $this                  setId(string $id)
 * @method int                    getOfferedQuantity()
 * @method $this                  setOfferedQuantity(int $offeredQuantity)
 * @method string                 getPromoCode()
 * @method $this                  setPromoCode(string $promoCode)
 */
class AppliedPromotion extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'campaign'      => [PromotionCampaign::class, 'create'],
        'configuration' => [PromotionConfiguration::class, 'create'],
    ];
}
