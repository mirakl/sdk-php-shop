<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  string                          getOrderLineId()
 * @method  $this                           setOrderLineId(string $orderLineId)
 */
abstract class AbstractOrderLineWithAdditionalFields extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_additional_fields'      => 'additional_fields',
        'order_line_additional_fields' => 'additional_fields',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];
}