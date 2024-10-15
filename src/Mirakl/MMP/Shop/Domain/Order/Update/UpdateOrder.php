<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderLineCollection;

/**
 * @method string                      getOrderId();
 * @method $this                     setOrderId(string $orderId)
 * @method UpdateReferences          getReferences()
 * @method $this                     setReferences(UpdateReferences $references)
 * @method UpdateOrderLineCollection getOrderLines()
 * @method $this                     setOrderLines(UpdateOrderLineCollection|array $orderLines)
 */
class UpdateOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'references' => [UpdateReferences::class, 'create'],
    ];
}
