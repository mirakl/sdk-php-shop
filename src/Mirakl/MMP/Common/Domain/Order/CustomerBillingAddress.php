<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
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
 * @method  string  getComplementary()
 * @method  $this   setComplementary(string $complementary)
 * @method  string  getZipCode()
 * @method  $this   setZipCode(string $zipCode)
 * @method  string  getCity()
 * @method  $this   setCity(string $city)
 * @method  string  getCountry()
 * @method  $this   setCountry(string $country)
 * @method  string  getCountryIsoCode()
 * @method  $this   setCountryIsoCode(string $countryIsoCode)
 * @method  string  getCompany()
 * @method  $this   setCompany(string $company)
 * @method  string  getState()
 * @method  $this   setState(string $state)
 * @method  string  getPhone()
 * @method  $this   setPhone(string $phone)
 * @method  string  getPhoneSecondary()
 * @method  $this   setPhoneSecondary(string $phoneSecondary)
 */
class CustomerBillingAddress extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'country_code' => 'country_iso_code',
    ];

    /**
     * @return  string
     */
    public function getCountryCode()
    {
        return $this->getCountryIsoCode();
    }

    /**
     * @param   string  $countryIsoCode
     * @return  $this
     */
    public function setCountryCode($countryIsoCode)
    {
        return $this->setCountryIsoCode($countryIsoCode);
    }
}