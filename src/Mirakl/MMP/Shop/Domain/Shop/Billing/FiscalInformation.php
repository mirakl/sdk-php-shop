<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop\Billing;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getLocalTaxNumber()
 * @method $this  setLocalTaxNumber(string $localTaxNumber)
 * @method string getTaxIdentificationCountry()
 * @method $this  setTaxIdentificationCountry(string $taxIdentificationCountry)
 * @method string getTaxIdentificationNumber()
 * @method $this  setTaxIdentificationNumber(string $taxIdentificationNumber)
 */
class FiscalInformation extends MiraklObject
{
}
