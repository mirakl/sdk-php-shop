<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shop\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shop\Create\CreateShop;

/**
 * @method  CreateShop  current()
 * @method  CreateShop  first()
 * @method  CreateShop  get($offset)
 * @method  CreateShop  offsetGet($offset)
 * @method  CreateShop  last()
 */
class CreateShopCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateShop::class;
}