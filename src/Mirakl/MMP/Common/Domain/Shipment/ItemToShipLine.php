<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getOfferSku()
 * @method  $this   setOfferSku(string $offerSku)
 * @method  string  getOrderLineId()
 * @method  $this   setOrderLineId(string $orderLineId)
 * @method  string  getPackageDescription()
 * @method  $this   setPackageDescription(string $packageDescription)
 * @method  string  getPackageReference()
 * @method  $this   setPackageReference(string $packageReference)
 * @method  string  getProductTitle()
 * @method  $this   setProductTitle(string $productTitle)
 * @method  int     getQuantity()
 * @method  $this   setQuantity(int $quantity)
 */
class ItemToShipLine extends MiraklObject
{}