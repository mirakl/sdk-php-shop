<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\AdditionalFieldValue;
use Mirakl\MMP\Shop\Domain\Order\OrderLineWithAdditionalFields;

/**
 * @method  AdditionalFieldValue    current()
 * @method  AdditionalFieldValue    first()
 * @method  AdditionalFieldValue    get($offset)
 * @method  AdditionalFieldValue    offsetGet($offset)
 * @method  AdditionalFieldValue    last()
 */

class OrderLineWithAdditionalFieldsCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineWithAdditionalFields::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return OrderLineWithAdditionalFields::create($item);
    }
}