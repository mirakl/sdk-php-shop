<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  AsyncExportOfferFulfillmentCenter   getCenter()
 * @method  $this                               setCenter(AsyncExportOfferFulfillmentCenter $center)
 */
class AsyncExportOfferFulfillment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'center' => [AsyncExportOfferFulfillmentCenter::class, 'create'],
    ];
}