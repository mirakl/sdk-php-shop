<?php
namespace Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderLineWithAdditionalFieldsCollection;

/**
 * @method  AdditionalFieldValueCollection          getOrderAdditionalFields()
 * @method  $this                                   setOrderAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  OrderLineWithAdditionalFieldsCollection getOrderLines()
 * @method  $this                                   setOrderLines(array|OrderLineWithAdditionalFieldsCollection $orderLines)
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
        'order_lines'       => [OrderLineWithAdditionalFieldsCollection::class, 'create'],
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];

    /**
     * @return AdditionalFieldValueCollection
     *
     * @deprecated use getOrderAdditionalFields()
     */
    public function getAdditionalFields()
    {
        return $this->getOrderAdditionalFields();
    }

    /**
     * @param  array|AdditionalFieldValueCollection $additionalFields
     * @return $this
     *
     * @deprecated use setOrderAdditionalFields($additionalFields)
     */
    public function setAdditionalFields($additionalFields)
    {
        return $this->setOrderAdditionalFields($additionalFields);
    }
}