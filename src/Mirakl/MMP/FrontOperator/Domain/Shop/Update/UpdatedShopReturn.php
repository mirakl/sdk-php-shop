<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Shop;
use Mirakl\MMP\FrontOperator\Domain\Shop\ShopWithErrors;

/**
 * @method  Shop            getShopUpdated()
 * @method  $this           setShopUpdated(array|Shop $shopUpdated)
 * @method  ShopWithErrors  getShopError()
 * @method  $this           setShopError(array|ShopWithErrors $shopError)
 */
class UpdatedShopReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shop_updated' => [Shop::class, 'create'],
        'shop_error'   => [ShopWithErrors::class, 'create'],
    ];
}