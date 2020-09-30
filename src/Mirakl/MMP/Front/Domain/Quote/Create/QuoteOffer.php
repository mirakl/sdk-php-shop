<?php
namespace Mirakl\MMP\Front\Domain\Quote\Create;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCurrencyIsoCode()
 * @method  $this   setCurrencyIsoCode(string $currencyCode)
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 * @method  int     getQuantity()
 * @method  $this   setQuantity(int $qty)
 * @method  float   getUnitPrice()
 * @method  $this   setUnitPrice(float $unitPrice)
 */
class QuoteOffer extends MiraklObject
{}