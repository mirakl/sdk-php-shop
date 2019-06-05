<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\Amount;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdownPart;

/**
 * @method  AmountBreakdownPart  current()
 * @method  AmountBreakdownPart  first()
 * @method  AmountBreakdownPart  get($offset)
 * @method  AmountBreakdownPart  offsetGet($offset)
 * @method  AmountBreakdownPart  last()
 */
class AmountBreakdownPartCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AmountBreakdownPart::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return AmountBreakdownPart::create($item);
    }
}