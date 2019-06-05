<?php
namespace Mirakl\MMP\Common\Domain\Order\Amount;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Amount\AmountBreakdownPartCollection;

/**
 * @method  AmountBreakdownPartCollection   getParts()
 * @method  $this                           setParts(AmountBreakdownPartCollection $amountBreakdownPartCollection)
 */
class AmountBreakdown extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'parts' => [AmountBreakdownPartCollection::class, 'create'],
    ];
}