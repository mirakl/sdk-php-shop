<?php
namespace Mirakl\MMP\Shop\Domain\Order\Cancelation;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\CancelationCreatedCollection;

/**
 * @method  CancelationCreatedCollection    getCancelations()
 * @method  $this                           setCancelations(array|CancelationCreatedCollection $cancelations)
 * @method  string                          getOrderTaxMode()
 * @method  $this                           setOrderTaxMode(string $orderTaxMode)
 */
class CancelationsCreated extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'cancelations' => [CancelationCreatedCollection::class, 'create'],
    ];
}
