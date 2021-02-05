<?php
namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFieldsValues()
 * @method  $this                           setAdditionalFieldsValues(array|AdditionalFieldValueCollection $additionalFields)
 */
class ShippingTypeWithConfiguration extends ShippingType
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shipping_additional_fields' => 'additional_fields_values',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_fields_values' => [AdditionalFieldValueCollection::class, 'create'],
    ];
}