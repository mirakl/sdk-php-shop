<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmountOff()
 * @method  $this   setAmountOff(float $amountOff)
 * @method  int     getFreeItemsQuantity()
 * @method  $this   setFreeItemsQuantity(int $freeItemsQty)
 * @method  string  getInternalDescription()
 * @method  $this   setInternalDescription(string $internalDescription)
 * @method  float   getPercentageOff()
 * @method  $this   setPercentageOff(float $percentageOff)
 * @method  string  getType()
 * @method  $this   setType(string $type)
 */
class PromotionConfiguration extends MiraklObject
{
    const TYPE_PERCENTAGE_OFF = 'PERCENTAGE_OFF';
    const TYPE_AMOUNT_OFF     = 'AMOUNT_OFF';
    const TYPE_FREE_ITEMS     = 'FREE_ITEMS';
}