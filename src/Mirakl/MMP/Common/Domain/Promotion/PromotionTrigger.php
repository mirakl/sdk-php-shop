<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getType() // One of: minimum_amount, every_amount, minimum_quantity, every_quantity
 * @method $this  setType(string $type)
 * @method int    getQuantityPurchased()
 * @method $this  setQuantityPurchased(int $quantityPurchased)
 * @method float  getAmountPurchased()
 * @method $this  setAmountPurchased(float $amountPurchased)
 * @method bool   getSameItemPurchased()
 * @method $this  setSameItemPurchased(bool $sameItemPurchased)
 */
class PromotionTrigger extends MiraklObject
{
    const MINIMUM_AMOUNT   = 'minimum_amount';
    const EVERY_AMOUNT     = 'every_amount';
    const MINIMUM_QUANTITY = 'minimum_quantity';
    const EVERY_QUANTITY   = 'every_quantity';
}