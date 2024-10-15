<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop\Billing;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string    getBirthCity()
 * @method $this     setBirthCity(string $birthCity)
 * @method string    getBirthCountry()
 * @method $this     setBirthCountry(string $birthCountry)
 * @method \DateTime getBirthDate()
 * @method $this     setBirthDate(\DateTime $birthDate)
 * @method string    getCivility()
 * @method $this     setCivility(string $civility)
 * @method string    getFirstName()
 * @method $this     setFirstName(string $firstName)
 * @method string    getLastName()
 * @method $this     setLastName(string $lastName)
 */
class PersonalInformation extends MiraklObject
{
}
