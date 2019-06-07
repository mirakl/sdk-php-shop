<?php
namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingZonesRequest;

/**
 * (SH11) List all shipping zones
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Shipping\GetShippingZonesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetShippingZonesRequest();
 * $request->setLocale('fr_FR');
 *
 * $result = $api->getShippingZones($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingZoneDetailCollection
 *
 * </code>
 */
class GetShippingZonesRequest extends AbstractGetShippingZonesRequest
{}