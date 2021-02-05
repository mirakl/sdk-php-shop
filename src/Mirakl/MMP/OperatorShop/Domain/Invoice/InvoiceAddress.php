<?php
namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 * @method  string  getCustomerId()
 * @method  $this   setCustomerId(string $customerId)
 * @method  string  getCivility()
 * @method  $this   setCivility(string $civility)
 * @method  string  getFirstname()
 * @method  $this   setFirstname(string $firstname)
 * @method  string  getLastname()
 * @method  $this   setLastname(string $lastname)
 * @method  string  getStreet1()
 * @method  $this   setStreet1(string $street1)
 * @method  string  getStreet2()
 * @method  $this   setStreet2(string $street2)
 * @method  string  getZipCode()
 * @method  $this   setZipCode(string $zipCode)
 * @method  string  getCity()
 * @method  $this   setCity(string $city)
 * @method  string  getCountry()
 * @method  $this   setCountry(string $country)
 * @method  string  getCountryCode()
 * @method  $this   setCountryCode(string $countryCode)
 * @method  string  getCompany()
 * @method  $this   setCompany(string $company)
 * @method  string  getState()
 * @method  $this   setState(string $state)
 * @method  string  getPhone()
 * @method  $this   setPhone(string $phone)
 * @method  string  getPhoneSecondary()
 * @method  $this   setPhoneSecondary(string $phoneSecondary)
 */
class InvoiceAddress extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'street1' => 'street_1',
        'street2' => 'street_2',
    ];
}