<?php
namespace Mirakl\MMP\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\EcoContribution;

/**
 * @method  EcoContribution current()
 * @method  EcoContribution first()
 * @method  EcoContribution get($offset)
 * @method  EcoContribution offsetGet($offset)
 * @method  EcoContribution last()
 */
class EcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = EcoContribution::class;
}