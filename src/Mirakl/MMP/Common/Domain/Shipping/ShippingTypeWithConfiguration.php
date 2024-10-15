<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;

/**
 * @method AdditionalFieldValueCollection getAdditionalFieldsValues()
 * @method $this                          setAdditionalFieldsValues(AdditionalFieldValueCollection|array $additionalFields)
 * @method string                         getCode()
 * @method $this                          setCode(string $code)
 * @method \DateTime                      getCutOffNextDate()
 * @method $this                          setCutOffNextDate(\DateTime $cutOffNextDate)
 * @method string                         getCutOffTime()
 * @method $this                          setCutOffTime(string $time)
 * @method DeliveryTime                   getDeliveryTime()
 * @method $this                          setDeliveryTime(DeliveryTime|array $deliveryTime)
 * @method string                         getLabel()
 * @method $this                          setLabel(string $label)
 * @method \DateTime                      getShippingDeadline()
 * @method $this                          setShippingDeadline(\DateTime $shippingDeadline)
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
        'delivery_time'            => [DeliveryTime::class, 'create'],
    ];
}
