<?php
namespace Mirakl\MMP\Operator\Domain\Collection\Shop\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Operator\Domain\Shop\Update\UpdateShop;

/**
 * @method  UpdateShop  current()
 * @method  UpdateShop  first()
 * @method  UpdateShop  get($offset)
 * @method  UpdateShop  offsetGet($offset)
 * @method  UpdateShop  last()
 */
class UpdateShopCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateShop::class;
}