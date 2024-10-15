<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCity()
 * @method $this  setCity(string $city)
 * @method string getCountryIsoCode()
 * @method $this  setCountryIsoCode(string $countryIsoCode)
 * @method string getState()
 * @method $this  setState(string $state)
 * @method string getZipCode()
 * @method $this  setZipCode(string $zipCode)
 */
class DocumentRequestShippingFromAddress extends MiraklObject
{
    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->getData('street1');
    }

    /**
     * @param string $street1
     * @return $this
     */
    public function setStreet1($street1)
    {
        return $this->setData('street1', $street1);
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->getData('street2');
    }

    /**
     * @param string $street2
     * @return $this
     */
    public function setStreet2($street2)
    {
        return $this->setData('street2', $street2);
    }
}
