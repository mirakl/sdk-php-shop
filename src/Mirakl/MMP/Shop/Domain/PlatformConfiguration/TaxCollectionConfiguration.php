<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getActivated() // Is Tax collection activated. NO: Not activated / YES: Activated for all stores
 * @method $this  setActivated(string $activated)
 * @method bool   getIsTaxCollectionByOperator() // Is operator in charge of tax collection on behalf of sellers
 * @method $this  setIsTaxCollectionByOperator(bool $isTaxCollectionByOperator)
 * @method bool   getIsProductTaxCodeMandatory() // Is product tax code mandatory at offer level
 * @method $this  setIsProductTaxCodeMandatory(bool $isTaxCollectionByOperator)
 */
class TaxCollectionConfiguration extends MiraklObject
{
    const TAX_COLLECTION_ACTIVATED_NO = 'NO';
    const TAX_COLLECTION_ACTIVATED_YES = 'YES';
    const TAX_COLLECTION_ACTIVATED_YES_PER_STORE = 'YES_PER_STORE';

    /**
     * @var array
     */
    protected static $mapping = [
        'tax_collection_by_operator' => 'is_tax_collection_by_operator',
        'product_tax_code_mandatory' => 'is_product_tax_code_mandatory',
    ];
}