<?php
namespace Mirakl\MMP\Operator\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float       getAmount()
 * @method  $this       setAmount(float $amount)
 * @method  string      getDescription()
 * @method  $this       setDescription(string $description)
 * @method  int         getQuantity()
 * @method  $this       setQuantity(int $qty)
 * @method  string[]    getTaxCodes()
 * @method  $this       setTaxCodes(string[] $taxCodes)
 */
class ManualAccountingDocumentLine extends MiraklObject
{}