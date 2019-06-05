<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Promotion\AppliedPromotionCollection;

/**
 * @method  float                       getTotalDeducedAmount()
 * @method  $this                       setTotalDeducedAmount(float $totalDeducedAmount)
 * @method  AppliedPromotionCollection  getAppliedPromotions()
 * @method  $this                       setAppliedPromotions(array|AppliedPromotionCollection $appliedPromotions)
 */
class OrderPromotionsSummary extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'applied_promotions' => [AppliedPromotionCollection::class, 'create'],
    ];
}