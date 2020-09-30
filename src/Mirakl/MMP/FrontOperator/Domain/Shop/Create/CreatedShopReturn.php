<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Shop;
use Mirakl\MMP\FrontOperator\Domain\Shop\ShopWithErrors;

/**
 * @method  Shop            getShopCreated()
 * @method  $this           setShopCreated(array|Shop $shopCreated)
 * @method  ShopWithErrors  getShopError()
 * @method  $this           setShopError(array|ShopWithErrors $shopError)
 */
class CreatedShopReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shop_created' => [Shop::class, 'create'],
        'shop_error'   => [ShopWithErrors::class, 'create'],
    ];
}