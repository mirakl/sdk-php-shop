<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;

/**
 * @method  AdditionalFieldValueCollection  getOrderLineAdditionalFields()
 * @method  $this                           setOrderLineAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  string                          getOrderLineId()
 * @method  $this                           setOrderLineId(string $orderLineId)
 */
abstract class AbstractOrderLineWithAdditionalFields extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_additional_fields' => 'order_line_additional_fields',
        'additional_fields'       => 'order_line_additional_fields',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_line_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];

    /**
     * @return AdditionalFieldValueCollection
     *
     * @deprecated use getOrderLineAdditionalFields()
     */
    public function getAdditionalFields()
    {
        return $this->getOrderLineAdditionalFields();
    }

    /**
     * @param array|AdditionalFieldValueCollection $additionalFields
     * @return $this
     *
     * @deprecated use setOrderLineAdditionalFields($additionalFields)
     */
    public function setAdditionalFields($additionalFields)
    {
        return $this->setOrderLineAdditionalFields($additionalFields);
    }
}