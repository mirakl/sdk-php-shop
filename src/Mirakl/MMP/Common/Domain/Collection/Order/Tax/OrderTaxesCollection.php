<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\Tax;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Tax\OrderTaxes;

/**
 * @method OrderTaxes current()
 * @method OrderTaxes first()
 * @method OrderTaxes get($offset)
 * @method OrderTaxes offsetGet($offset)
 * @method OrderTaxes last()
 */
class OrderTaxesCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderTaxes::class;
}
