<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getShopTaxIdentifierCode()
 * @method  $this   setShopTaxIdentifierCode(string $shopTaxIdentifierCode)
 * @method  float   getTaxAmount()
 * @method  $this   setTaxAmount(float $taxAmount)
 */
class AsyncExportOfferEcoContribution extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'producer_id'             => 'shop_tax_identifier_code',
        'eco_contribution_amount' => 'tax_amount',
    ];
}