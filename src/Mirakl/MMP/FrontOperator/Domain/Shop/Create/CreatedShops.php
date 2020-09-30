<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Create\CreatedShopReturnCollection;

/**
 * @method  CreatedShopReturnCollection getShopReturns()
 * @method  $this                       setShopReturns(array|CreatedShopReturnCollection $shopReturns)
 */
class CreatedShops extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shop_returns' => [CreatedShopReturnCollection::class, 'create'],
    ];
}