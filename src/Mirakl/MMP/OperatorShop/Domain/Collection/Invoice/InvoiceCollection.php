<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Invoice;

/**
 * @method  Invoice current()
 * @method  Invoice first()
 * @method  Invoice get($offset)
 * @method  Invoice offsetGet($offset)
 * @method  Invoice last()
 */
class InvoiceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Invoice::class;
}