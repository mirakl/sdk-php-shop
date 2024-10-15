<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float                    getCommissionPrice()
 * @method $this                    setCommissionPrice(float $commissionPrice)
 * @method float                    getPrice()
 * @method $this                    setPrice(float $price)
 * @method PurchaseCommissionOnFees getPurchaseCommissionOnFees()
 * @method $this                    setPurchaseCommissionOnFees(PurchaseCommissionOnFees|array $commissionPrice)
 * @method PurchaseFeeAmount        getPurchaseFeeAmount()
 * @method $this                    setPurchaseFeeAmount(PurchaseFeeAmount|array $commissionPrice)
 * @method float                    getShippingCommissionPrice()
 * @method $this                    setShippingCommissionPrice(float $shippingCommissionPrice)
 * @method float                    getShippingPrice()
 * @method $this                    setShippingPrice(float $shippingPrice)
 * @method float                    getUnitPrice()
 * @method $this                    setUnitPrice(float $unitPrice)
 */
class PurchaseInformation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'purchase_commission_on_price'    => 'commission_price',
        'purchase_commission_on_shipping' => 'shipping_commission_price',
        'purchase_price'                  => 'price',
        'purchase_shipping_price'         => 'shipping_price',
        'purchase_unit_price'             => 'unit_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'purchase_commission_on_fees' => [PurchaseCommissionOnFees::class, 'create'],
        'purchase_fee_amount'         => [PurchaseFeeAmount::class, 'create'],
    ];
}
