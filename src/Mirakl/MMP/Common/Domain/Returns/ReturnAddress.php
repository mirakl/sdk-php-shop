<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getStreet1()
 * @method $this  setStreet1(string $street1)
 * @method string getStreet2()
 * @method $this  setStreet2(string $street2)
 * @method string getCountryIsoCode()
 * @method $this  setCountryIsoCode(string $countryIsoCode)
 * @method string getCity()
 * @method $this  setCity(string $city)
 * @method string getState()
 * @method $this  setState(string $state)
 * @method string getZipCode()
 * @method $this  setZipCode(string $zipCode)
 */
class ReturnAddress extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'street1' => 'street_1',
        'street2' => 'street_2',
    ];
}
