<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getPrice()
 * @method  $this   setPrice(float $price)
 * @method  float   getShippingPrice()
 * @method  $this   setShippingPrice(float $shippingPrice)
 * @method  float   getTotalCommission()
 * @method  $this   setTotalCommission(float $totalCommission)
 * @method  float   getTotalPrice()
 * @method  $this   setTotalPrice(float $totalPrice)
 */
class QuotePriceSummary extends MiraklObject
{}