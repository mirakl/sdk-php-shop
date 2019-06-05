<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  bool                    getApportioned()
 * @method  $this                   setApportioned(bool $apportioned)
 * @method  bool                    isApportioned()
 * @method  float                   getDeducedAmount()
 * @method  $this                   setDeducedAmount(float $deducedAmount)
 * @method  string                  getId()
 * @method  $this                   setId(string $id)
 * @method  int                     getOfferedQuantity()
 * @method  $this                   setOfferedQuantity(int $offeredQuantity)
 * @method  PromotionConfiguration  getConfiguration()
 * @method  $this                   setConfiguration(array|PromotionConfiguration $configuration)
 */
class AppliedPromotion extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'configuration' => [PromotionConfiguration::class, 'create'],
    ];
}