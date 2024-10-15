<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float                           getCommissionPrice()
 * @method $this                           setCommissionPrice(float $commissionPrice)
 * @method float                           getPrice()
 * @method $this                           setPrice(float $price)
 * @method DiscardPurchaseCommissionOnFees getPurchaseCommissionOnFees()
 * @method $this                           setPurchaseCommissionOnFees(DiscardPurchaseCommissionOnFees|array $commissionPrice)
 * @method DiscardPurchaseFeeAmount        getPurchaseFeeAmount()
 * @method $this                           setPurchaseFeeAmount(DiscardPurchaseFeeAmount|array $commissionPrice)
 * @method float                           getShippingCommissionPrice()
 * @method $this                           setShippingCommissionPrice(float $shippingCommissionPrice)
 * @method float                           getShippingPrice()
 * @method $this                           setShippingPrice(float $shippingPrice)
 */
class DiscardPurchaseInformation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'purchase_commission_on_price'    => 'commission_price',
        'purchase_commission_on_shipping' => 'shipping_commission_price',
        'purchase_price'                  => 'price',
        'purchase_shipping_price'         => 'shipping_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'purchase_commission_on_fees' => [DiscardPurchaseCommissionOnFees::class, 'create'],
        'purchase_fee_amount'         => [DiscardPurchaseFeeAmount::class, 'create'],
    ];
}
