<?php
namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingCarriersRequest;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $result = $api->getShippingCarriers();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection
 * </code>
 */
class GetShippingCarriersRequest extends AbstractGetShippingCarriersRequest
{}