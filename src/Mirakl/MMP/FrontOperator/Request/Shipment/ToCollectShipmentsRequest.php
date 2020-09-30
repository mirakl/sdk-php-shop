<?php
namespace Mirakl\MMP\FrontOperator\Request\Shipment;

use Mirakl\MMP\Common\Request\Shipment\AbstractToCollectShipmentsRequest;

/**
 * (ST27) Validate the receipt of "Click & Collect" shipments in an operator store (limited to 1000 shipments at a time)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $shipments = [
 *     ['id' => '9d6290c3-8b25-43c0-b448-914d0aab38c0'],
 *     ['id' => 'c8a18e47-9542-4c86-a770-50caa744abb6'],
 *     ['id' => '319d9463-e7b2-40a2-849c-32ebd8619398'],
 * ];
 * $request = new \Mirakl\MMP\FrontOperator\Request\Shipment\ToCollectShipmentsRequest($shipments);
 *
 * $result = $api->toCollectShipments($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse
 *
 * // $result->getShipmentErrors()
 * // $result->getShipmentSuccess()
 * </code>
 */
class ToCollectShipmentsRequest extends AbstractToCollectShipmentsRequest
{}