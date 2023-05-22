<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedOrderlineEcoContribution;

/**
 * @method  UpdatedOrderlineEcoContribution current()
 * @method  UpdatedOrderlineEcoContribution first()
 * @method  UpdatedOrderlineEcoContribution get($offset)
 * @method  UpdatedOrderlineEcoContribution offsetGet($offset)
 * @method  UpdatedOrderlineEcoContribution last()
 */
class UpdatedOrderlineEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedOrderlineEcoContribution::class;
}