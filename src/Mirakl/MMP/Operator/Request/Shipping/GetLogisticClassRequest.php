<?php
namespace Mirakl\MMP\Operator\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetLogisticClassRequest;

/**
 * (SH31) List all logistic classes
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $result = $api->getLogisticClasses();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection
 * </code>
 */
class GetLogisticClassRequest extends AbstractGetLogisticClassRequest
{}