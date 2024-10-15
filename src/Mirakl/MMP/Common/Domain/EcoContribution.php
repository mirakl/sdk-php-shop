<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float  getEcoContributionAmount()
 * @method $this  setEcoContributionAmount(float $ecoContributionAmount)
 * @method string getEprCategoryCode()
 * @method $this  setEprCategoryCode(string $eprCategoryCode)
 * @method string getProducerId()
 * @method $this  setProducerId(string $producerId)
 */
class EcoContribution extends MiraklObject
{
    public const LIST_SEPARATOR = ',';
    public const PRODUCERID_AND_AMOUNT_SEPARATOR = '|';
}
