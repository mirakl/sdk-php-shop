<?php
namespace Mirakl\MMP\Shop\Domain\Currency;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCode()
 * @method $this  setCode(string $code)
 * @method bool   getIsPlatformDefault()
 * @method $this  setIsPlatformDefault(bool $isPlatformDefault)
 * @method bool   getLabel()
 * @method $this  setLabel(string $label)
 */
class Currency extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'platform_default' => 'is_platform_default',
    ];
}