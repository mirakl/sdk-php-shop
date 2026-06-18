<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\SellerBillingCycle;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\SellerBillingCycle\SellerBillingCycle;

/**
 * @method SellerBillingCycle current()
 * @method SellerBillingCycle first()
 * @method SellerBillingCycle get($offset)
 * @method SellerBillingCycle last()
 * @method SellerBillingCycle offsetGet($offset)
 */
class SellerBillingCycleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = SellerBillingCycle::class;
}
