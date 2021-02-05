<?php
namespace Mirakl\MMP\Common\Domain\Adjust;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Adjust\AdjustmentCancelationCollection;
use Mirakl\MMP\Common\Domain\Collection\Adjust\AdjustmentErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Adjust\AdjustmentRefundCollection;
use Mirakl\MMP\Common\Domain\Order\OrderLineMeasurement;

/**
 * @method  AdjustmentCancelationCollection getCancelations()
 * @method  $this                           setCancelations(array|AdjustmentCancelationCollection $cancelations)
 * @method  AdjustmentErrorCollection       getErrors()
 * @method  $this                           setErrors(array|AdjustmentErrorCollection $errors)
 * @method  OrderLineMeasurement            getMeasurement()
 * @method  $this                           setMeasurement(array|OrderLineMeasurement $measurement)
 * @method  string                          getOrderLineId()
 * @method  $this                           setOrderLineId(string $orderLineId)
 * @method  AdjustmentRefundCollection      getRefunds()
 * @method  $this                           setRefunds(array|AdjustmentRefundCollection $refunds)
 */
class CreatedAdjustment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'refund' => 'refunds',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'cancelations' => [AdjustmentCancelationCollection::class, 'create'],
        'errors'       => [AdjustmentErrorCollection::class, 'create'],
        'measurement'  => [OrderLineMeasurement::class, 'create'],
        'refunds'      => [AdjustmentRefundCollection::class, 'create'],
    ];
}