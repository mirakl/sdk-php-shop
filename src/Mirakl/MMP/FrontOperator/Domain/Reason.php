<?php
namespace Mirakl\MMP\FrontOperator\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  bool    getCustomerRight()
 * @method  $this   setCustomerRight(bool $flag)
 * @method  bool    isCustomerRight()
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 * @method  bool    getOperatorRight()
 * @method  $this   setOperatorRight(bool $flag)
 * @method  bool    isOperatorRight()
 * @method  string  getType()
 * @method  $this   setType(string $type)
 * @method  bool    getShopRight()
 * @method  $this   setShopRight(bool $flag)
 * @method  bool    isShopRight()
 */
class Reason extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'is_customer_right' => 'customer_right',
        'is_operator_right' => 'operator_right',
        'is_shop_right'     => 'shop_right',
    ];
}