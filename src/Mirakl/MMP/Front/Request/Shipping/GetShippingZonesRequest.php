<?php
namespace Mirakl\MMP\Front\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingZonesRequest;

/**
 * (SH11) List all shipping zones
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Shipping\GetShippingZonesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
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