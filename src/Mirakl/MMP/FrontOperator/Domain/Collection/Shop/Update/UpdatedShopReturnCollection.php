<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Shop\Update\UpdatedShopReturn;

/**
 * @method  UpdatedShopReturn   current()
 * @method  UpdatedShopReturn   first()
 * @method  UpdatedShopReturn   get($offset)
 * @method  UpdatedShopReturn   offsetGet($offset)
 * @method  UpdatedShopReturn   last()
 */
class UpdatedShopReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedShopReturn::class;
}