<?php
namespace Mirakl\MMP\Shop\Domain\Shop\Update;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCivility()
 * @method  $this   setCivility(string $civility)
 * @method  string  getFirstname()
 * @method  $this   setFirstname(string $firstname)
 * @method  string  getLastname()
 * @method  $this   setLastname(string $lastname)
 * @method  string  getZipCode()
 * @method  $this   setZipCode(string $zipCode)
 * @method  string  getCity()
 * @method  $this   setCity(string $city)
 * @method  string  getCountry()
 * @method  $this   setCountry(string $country)
 * @method  string  getState()
 * @method  $this   setState(string $state)
 * @method  string  getPhone()
 * @method  $this   setPhone(string $phone)
 * @method  string  getPhoneSecondary()
 * @method  $this   setPhoneSecondary(string $phoneSecondary)
 */
class UpdateShopAccountAddress extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'street_1' => 'street1',
        'street_2' => 'street2',
    ];

    /**
     * @return  string
     */
    public function getStreet1()
    {
        return $this->getData('street1');
    }

    /**
     * @param   string  $street1
     * @return  $this
     */
    public function setStreet1($street1)
    {
        return $this->setData('street1', $street1);
    }

    /**
     * @return  string
     */
    public function getStreet2()
    {
        return $this->getData('street2');
    }

    /**
     * @param   string  $street2
     * @return  $this
     */
    public function setStreet2($street2)
    {
        return $this->setData('street2', $street2);
    }
}