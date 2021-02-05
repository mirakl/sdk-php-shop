<?php
namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingTypesRequest;

/**
 * (SH12) List all active shipping methods
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Shipping\GetShippingTypesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetShippingTypesRequest();
 * $request->setLocale('fr_FR');
 *
 * $result = $api->getShippingTypes($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingTypeWithDescriptionCollection
 *
 * </code>
 */
class GetShippingTypesRequest extends AbstractGetShippingTypesRequest
{}