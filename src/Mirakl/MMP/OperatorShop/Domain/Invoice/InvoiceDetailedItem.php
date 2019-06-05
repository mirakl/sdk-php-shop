<?php
namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceTaxCollection;

/**
 * @method  float                   getAmountExclTaxes()
 * @method  $this                   setAmountExclTaxes(float $amountExclTaxes)
 * @method  string                  getDescription()
 * @method  $this                   setDescription(string $description)
 * @method  int                     getQuantity()
 * @method  $this                   setQuantity(int $qty)
 * @method  InvoiceTaxCollection    getTaxes()
 * @method  $this                   setTaxes(array|InvoiceTaxCollection $taxes)
 */
class InvoiceDetailedItem extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'taxes' => [InvoiceTaxCollection::class, 'create'],
    ];
}