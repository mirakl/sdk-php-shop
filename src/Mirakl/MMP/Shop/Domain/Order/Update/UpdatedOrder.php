<?php
namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedOrderLineCollection;

/**
 * @method  UpdatedReferences           getReferences()
 * @method  $this                       setReferences(UpdatedReferences $references)
 * @method  UpdatedOrderLineCollection  getOrderLines()
 * @method  $this                       setOrderLines(UpdatedOrderLineCollection|array $orderLines)
 */
class UpdatedOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [UpdatedOrderLineCollection::class, 'create'],
        'references'  => [UpdatedReferences::class, 'create'],
    ];
}