<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Contact information for a Mirakl Shop
 *
 * @method  string  getCivility()
 * @method  $this   setCivility(string $civility)
 * @method  string  getEmail()
 * @method  $this   setEmail(string $email)
 * @method  string  getFax()
 * @method  $this   setFax(string $fax)
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
 * @method  string  getCompany()
 * @method  $this   setCompany(string $company)
 * @method  string  getState()
 * @method  $this   setState(string $state)
 * @method  string  getPhone()
 * @method  $this   setPhone(string $phone)
 * @method  string  getPhoneSecondary()
 * @method  $this   setPhoneSecondary(string $phoneSecondary)
 * @method  string  getWebsite()
 * @method  $this   setWebsite(string $website)
 */
class ContactInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'street1' => 'street_1',
        'street2' => 'street_2',
    ];
}