<?php
namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\MMP\Common\Request\Shipment\AbstractDeleteShipmentRequest;

/**
 * (ST06) Delete shipments in shipping status
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $shipments = [
 *     ['id' => '976290c3-8b25-43c0-b448-914d0aab38nb0'],
 *     ['id' => 'm9a18e47-9542-4c86-a770-50caa744ab7hj'],
 *     ['id' => '6g9d9463-e7b2-40a2-849c-32ebd8619890'],
 * ];
 *
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\DeleteShipmentsRequest($shipments);
 *
 * $result = $api->deleteShipments($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse
 *
 * // $result->getShipmentErrors()
 * // $result->getShipmentSuccess()
 * </code>
 */
class DeleteShipmentsRequest extends AbstractDeleteShipmentRequest
{}