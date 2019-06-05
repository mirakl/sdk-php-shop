<?php
namespace Mirakl\MMP\Shop\Domain\Order\AdditionalField;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\ShopOrderLineCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  ShopOrderLineCollection         getOrderLines()
 * @method  $this                           setOrderLines(array|ShopOrderLineCollection $orderLines)
 */
class UpdateAdditionalFields extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_additional_fields' => 'additional_fields',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines'       => [ShopOrderLineCollection::class, 'create'],
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];
}