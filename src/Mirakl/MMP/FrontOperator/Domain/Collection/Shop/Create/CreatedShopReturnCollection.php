<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Shop\Create\CreatedShopReturn;

/**
 * @method  CreatedShopReturn   current()
 * @method  CreatedShopReturn   first()
 * @method  CreatedShopReturn   get($offset)
 * @method  CreatedShopReturn   offsetGet($offset)
 * @method  CreatedShopReturn   last()
 */
class CreatedShopReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreatedShopReturn::class;
}