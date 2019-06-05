<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceTax;

/**
 * @method  InvoiceTax  current()
 * @method  InvoiceTax  first()
 * @method  InvoiceTax  get($offset)
 * @method  InvoiceTax  offsetGet($offset)
 * @method  InvoiceTax  last()
 */
class InvoiceTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = InvoiceTax::class;
}