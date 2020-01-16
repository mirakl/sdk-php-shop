<?php
namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\MMP\Common\Request\Shipment\AbstractCreateShipmentsRequest;

/**
 * (ST01) Create shipments (limited to 1000 shipments at a time)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $shipmentsLine1 = new \Mirakl\MMP\Common\Domain\Shipment\ShipmentLine();
 * $shipmentsLine1->setOfferSku('22265148670033');
 * $shipmentsLine1->setQuantity(1);
 * $shipmentsLine2 = new \Mirakl\MMP\Common\Domain\Shipment\ShipmentLine();
 * $shipmentsLine2->setOfferSku('22265145819217');
 * $shipmentsLine2->setQuantity(1);
 * $shipmentsLines = new \Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection();
 * $shipmentsLines->add($shipmentsLine1);
 * $shipmentsLines->add($shipmentsLine2);
 *
 * $tracking = new \Mirakl\MMP\Common\Domain\Shipment\ShipmentTracking();
 * $tracking->setCarrierCode('UPS');
 * $tracking->setCarrierName('UPS');
 * $tracking->setTrackingNumber('123456798');
 *
 * $shipment = new \Mirakl\MMP\Common\Domain\Shipment\CreateShipment();
 * $shipment->setOrderId('MIR_000000023-A');
 * $shipment->setShipmentLines($shipmentsLines);
 * $shipment->setTracking($tracking);
 *
 * $shipments = new \Mirakl\MMP\Common\Domain\Collection\Shipment\CreateShipmentCollection();
 * $shipments->add($shipment);
 *
 * $request = new \Mirakl\MMP\Shop\Request\Shipment\CreateShipmentsRequest($shipments);
 * $result = $api->createShipments($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Shipment\CreatedShipments
 * </code>
 */
class CreateShipmentsRequest extends AbstractCreateShipmentsRequest
{}