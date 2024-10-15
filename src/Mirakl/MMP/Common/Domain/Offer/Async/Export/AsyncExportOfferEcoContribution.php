<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getEprCategoryCode()
 * @method $this  setEprCategoryCode(string $eprCategoryCode)
 * @method string getShopTaxIdentifierCode()
 * @method $this  setShopTaxIdentifierCode(string $shopTaxIdentifierCode)
 * @method float  getTaxAmount()
 * @method $this  setTaxAmount(float $taxAmount)
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
