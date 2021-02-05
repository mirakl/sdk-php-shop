<?php
namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\MMP\Common\Request\Shipping\AbstractGetLogisticClassRequest;

/**
 * (SH31) List all logistic classes
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $result = $api->getLogisticClasses();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection
 * </code>
 */
class GetLogisticClassRequest extends AbstractGetLogisticClassRequest
{}