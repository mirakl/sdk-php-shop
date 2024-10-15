<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\AggregatedTax;

/**
 * @method AggregatedTax current()
 * @method AggregatedTax first()
 * @method AggregatedTax get($offset)
 * @method AggregatedTax offsetGet($offset)
 * @method AggregatedTax last()
 */
class AggregatedTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AggregatedTax::class;
}
