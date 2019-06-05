<?php
namespace Mirakl\MMP\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\AdditionalFieldValue;

/**
 * @method  AdditionalFieldValue    current()
 * @method  AdditionalFieldValue    first()
 * @method  AdditionalFieldValue    get($offset)
 * @method  AdditionalFieldValue    offsetGet($offset)
 * @method  AdditionalFieldValue    last()
 */
class AdditionalFieldValueCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdditionalFieldValue::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return AdditionalFieldValue::create($item);
    }
}