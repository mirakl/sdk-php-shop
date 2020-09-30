<?php
namespace Mirakl\MMP\Front\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingCarriersRequest;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $result = $api->getShippingCarriers();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection
 * </code>
 */
class GetShippingCarriersRequest extends AbstractGetShippingCarriersRequest
{}