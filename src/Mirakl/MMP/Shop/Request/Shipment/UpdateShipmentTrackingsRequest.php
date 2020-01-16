<?php
namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentTrackingsRequest;

/**
 * (ST23) Update carrier tracking information for shipments
 *
 * If the carrier is not registered, the complete tracking url can be provided.
 * Limited to 1000 shipments at a time.
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $shipments = [
 *     ['id' => '9d6290c3-8b25-43c0-b448-914d0aab38c0'],
 *     ['id' => 'c8a18e47-9542-4c86-a770-50caa744abb6'],
 *     ['id' => '319d9463-e7b2-40a2-849c-32ebd8619398'],
 * ];
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\UpdateShipmentTrackingsRequest($shipments);
 *
 * $result = $api->updateShipmentTrackings($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse
 *
 * // $result->getShipmentErrors()
 * // $result->getShipmentSuccess()
 * </code>
 */
class UpdateShipmentTrackingsRequest extends AbstractUpdateShipmentTrackingsRequest
{}