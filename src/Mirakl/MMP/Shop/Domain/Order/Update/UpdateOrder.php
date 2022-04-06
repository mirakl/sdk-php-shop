<?php
namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string           getOrderId();
 * @method $this            setOrderId(string $orderId)
 * @method UpdateReferences getReferences()
 * @method $this            setReferences(UpdateReferences $references)
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