<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxEstimationCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\AppliedPromotionCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingTypeDetailCollection;
use Mirakl\MMP\Common\Domain\Discount;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShippingTypeCollection;

/**
 * @method  ShippingTypeCollection          getAllowedShippingTypes()
 * @method  $this                           setAllowedShippingTypes(array|ShippingTypeCollection $allowedShippingTypes)
 * @method  OrderTaxEstimationCollection    getShippingTaxes()
 * @method  $this                           setShippingTaxes(OrderTaxEstimationCollection $shippingTaxes)
 * @method  OrderTaxEstimationCollection    getTaxes()
 * @method  $this                           setTaxes(OrderTaxEstimationCollection $taxes)
 */
class ShippingRateOffer extends AbstractShippingOffer
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer_discount' => 'discount',
        'offer_id'       => 'id',
        'offer_price'    => 'price',
        'offer_quantity' => 'quantity',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'discount'                => [Discount::class, 'create'],
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'promotions'              => [AppliedPromotionCollection::class, 'create'],
        'shipping_type_details'   => [ShippingTypeDetailCollection::class, 'create'],
        'allowed_shipping_types'  => [ShippingTypeCollection::class, 'create'],
        'shipping_taxes'          => [OrderTaxEstimationCollection::class, 'create'],
        'taxes'                   => [OrderTaxEstimationCollection::class, 'create'],
    ];
}