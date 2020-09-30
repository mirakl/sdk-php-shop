<?php
namespace Mirakl\MMP\Front\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetLogisticClassRequest;

/**
 * (SH31) List all logistic classes
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $result = $api->getLogisticClasses();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection
 * </code>
 */
class GetLogisticClassRequest extends AbstractGetLogisticClassRequest
{}