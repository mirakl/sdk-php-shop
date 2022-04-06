<?php
namespace Mirakl\MMP\Shop\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 * @method  bool    getShopRight()
 * @method  $this   setShopRight(bool $flag)
 * @method  bool    isShopRight()
 * @method  string  getType()
 * @method  $this   setType(string $type)
 */
class Reason extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'is_shop_right' => 'shop_right',
    ];
}