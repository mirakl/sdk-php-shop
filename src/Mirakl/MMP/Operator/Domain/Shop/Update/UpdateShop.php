<?php
namespace Mirakl\MMP\Operator\Domain\Shop\Update;

use Mirakl\MMP\FrontOperator\Domain\Shop\AbstractCommonShop;
use Mirakl\MMP\FrontOperator\Domain\Shop\ShopAddress;

/**
 * @method  ShopAddress getAddress()
 * @method  $this       setAddress(array|ShopAddress $address)
 * @method  array       getChannels()
 * @method  $this       setChannels(array $channels)
 * @method  int         getShopId()
 * @method  $this       setShopId(int $shopId)
 * @method  bool        getPaymentBlocked()
 * @method  $this       setPaymentBlocked(bool $paymentBlocked)
 * @method  string      getPremiumState()
 * @method  $this       setPremiumState(string $premiumState)
 */
class UpdateShop extends AbstractCommonShop
{
    /**
     * @var array
     */
    protected static $mapping = [
        'channel_codes' => 'channels',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [ShopAddress::class, 'create'],
    ];
}