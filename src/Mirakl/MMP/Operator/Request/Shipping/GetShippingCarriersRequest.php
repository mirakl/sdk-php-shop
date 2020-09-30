<?php
namespace Mirakl\MMP\Operator\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingCarriersRequest;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $result = $api->getShippingCarriers();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection
 * </code>
 */
class GetShippingCarriersRequest extends AbstractGetShippingCarriersRequest
{}