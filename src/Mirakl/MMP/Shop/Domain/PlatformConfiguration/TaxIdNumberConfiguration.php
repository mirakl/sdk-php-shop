<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool   getIsMandatory() // Is Tax ID number mandatory
 * @method $this  setIsMandatory(bool $isMandatory)
 * @method string getValidationRegex() // Regular expression to match for sellers tax number ID
 * @method $this  setValidationRegex(string $validationRegex)
 */
class TaxIdNumberConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'mandatory' => 'is_mandatory',
    ];
}