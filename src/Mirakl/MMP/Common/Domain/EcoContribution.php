<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float  getEcoContributionAmount()
 * @method $this  setEcoContributionAmount(float $ecoContributionAmount)
 * @method string getProducerId()
 * @method $this  setProducerId(string $producerId)
 */
class EcoContribution extends MiraklObject
{
    const LIST_SEPARATOR = ',';
    const PRODUCERID_AND_AMOUNT_SEPARATOR = '|';
}