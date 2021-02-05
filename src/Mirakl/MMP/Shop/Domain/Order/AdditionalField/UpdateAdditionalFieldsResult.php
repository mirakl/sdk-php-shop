<?php
namespace Mirakl\MMP\Shop\Domain\Order\AdditionalField;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  UpdateAdditionalFields              getOrderUpdateResult()
 * @method  $this                               setOrderUpdateResult(array|UpdateAdditionalFields $orderUpdateResult)
 * @method  UpdateAdditionalFieldsWithErrors    getOrderUpdateErrors()
 * @method  $this                               setOrderUpdateErrors(array|UpdateAdditionalFieldsWithErrors $orderUpdateErrors)
 */
class UpdateAdditionalFieldsResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_update_result' => [UpdateAdditionalFields::class, 'create'],
        'order_update_errors' => [UpdateAdditionalFieldsWithErrors::class, 'create'],
    ];
}