<?php
namespace Mirakl\MMP\Shop\Domain\Shop;

use Mirakl\MMP\Common\Domain\Shop\AbstractShop;

/**
 * @method  ShopPaymentDetails  getPaymentDetails()
 * @method  $this               setPaymentDetails(array|ShopPaymentDetails $paymentDetails)
 */
class ShopAccount extends AbstractShop
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'payment_details' => [ShopPaymentDetails::class, 'create'],
    ];
}