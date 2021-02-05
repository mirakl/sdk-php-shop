<?php
namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 * @method  float   getLineOnlyShippingPrice();
 * @method  $this   setLineOnlyShippingPrice($lineOnlyShippingPrice);
 * @method  float   getLineOnlyTotalPrice();
 * @method  $this   setLineOnlyTotalPrice($lineOnlyTotalPrice);
 * @method  float   getLineShippingPrice();
 * @method  $this   setLineShippingPrice($lineShippingPrice);
 * @method  float   getLineTotalPrice();
 * @method  $this   setLineTotalPrice($lineTotalPrice);
 * @method  float   getShippingPriceAdditionalUnit();
 * @method  $this   setShippingPriceAdditionalUnit($shippingPriceAdditionalUnit);
 * @method  float   getShippingPriceUnit();
 * @method  $this   setShippingPriceUnit($shippingPriceUnit);
 */
class ShippingTypeDetail extends MiraklObject
{}