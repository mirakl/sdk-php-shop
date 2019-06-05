<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Billing information for a Mirakl Shop
 *
 * @method  string  getBankCity()
 * @method  $this   setBankCity(string $bankCity)
 * @method  string  getBankName()
 * @method  $this   setBankName(string $bankName)
 * @method  string  getBankStreet()
 * @method  $this   setBankStreet(string $bankStreet)
 * @method  string  getBic()
 * @method  $this   setBic(string $bic)
 * @method  string  getIban()
 * @method  $this   setIban(string $iban)
 * @method  string  getOwner()
 * @method  $this   setOwner(string $owner)
 * @method  string  getZipCode()
 * @method  $this   setZipCode(string $zipCode)
 */
class BillingInfo extends MiraklObject
{}