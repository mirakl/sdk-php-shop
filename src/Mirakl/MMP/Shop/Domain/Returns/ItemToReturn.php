<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string   getOrderCommercialId()
 * @method $this    setOrderCommercialId(string $orderCommercialId)
 * @method string   getOrderLineId()
 * @method $this    setOrderLineId(string $orderLineId)
 * @method int      getReturnableQuantity()
 * @method $this    setReturnableQuantity(int $returnableQuantity)
 * @method string[] getAvailableReturnReasons()
 * @method $this    setAvailableReturnReasons(string[] $availableReturnReasons)
 * @method string[] getAvailableReturnMethods()
 * @method $this    setAvailableReturnMethods(string[] $availableReturnMethods)
 * @method int      getReturnWindow()
 * @method $this    setReturnWindow(int $returnWindow)
 */
class ItemToReturn extends MiraklObject
{
}
