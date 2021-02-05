<?php
namespace Mirakl\MMP\Common\Domain\Fulfillment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  FulfillmentCenter   getCenter()
 * @method  $this               setCenter(FulfillmentCenter $center)
 */
class Fulfillment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'center' => [FulfillmentCenter::class, 'create'],
    ];
}