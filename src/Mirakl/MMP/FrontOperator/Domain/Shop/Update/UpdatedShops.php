<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Update\UpdatedShopReturnCollection;

/**
 * @method  UpdatedShopReturnCollection getShopReturns()
 * @method  $this                       setShopReturns(array|UpdatedShopReturnCollection $shopReturns)
 */
class UpdatedShops extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shop_returns' => [UpdatedShopReturnCollection::class, 'create'],
    ];
}