<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

class ShopShippingFeeErrorEnum
{
    // If the shipping type, defined in the query param, is not allowed for the shop
    const SHIPPING_TYPE_NOT_ALLOWED = 'SHIPPING_TYPE_NOT_ALLOWED';

    // If shop is not allowed for the shipping zone
    const SHIPPING_ZONE_NOT_ALLOWED = 'SHIPPING_ZONE_NOT_ALLOWED';
}