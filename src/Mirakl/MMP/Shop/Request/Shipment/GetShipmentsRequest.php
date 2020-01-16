<?php
namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\MMP\Common\Request\Shipment\AbstractGetShipmentsRequest;

/**
 * (ST11) List shipments (this resource supports seek pagination)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\GetShipmentsRequest();
 * $request->addOrderId('ORD-123');
 * $request->addShipmentStateCode(\Mirakl\MMP\Common\Domain\Shipment\ShipmentStatus::SHIPPED);
 *
 * $result = $api->getShipments($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 *
 * // Get next results with token from response:
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\GetShipmentsRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getShipments($request);
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
 * </code>
 */
class GetShipmentsRequest extends AbstractGetShipmentsRequest
{}