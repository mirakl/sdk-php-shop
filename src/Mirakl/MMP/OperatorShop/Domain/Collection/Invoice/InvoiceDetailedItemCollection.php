<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceDetailedItem;

/**
 * @method  InvoiceDetailedItem current()
 * @method  InvoiceDetailedItem first()
 * @method  InvoiceDetailedItem get($offset)
 * @method  InvoiceDetailedItem offsetGet($offset)
 * @method  InvoiceDetailedItem last()
 */
class InvoiceDetailedItemCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = InvoiceDetailedItem::class;
}