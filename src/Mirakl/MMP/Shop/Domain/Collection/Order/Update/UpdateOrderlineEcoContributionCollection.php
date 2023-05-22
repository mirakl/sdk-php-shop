<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdateOrderlineEcoContribution;

/**
 * @method  UpdateOrderlineEcoContribution current()
 * @method  UpdateOrderlineEcoContribution first()
 * @method  UpdateOrderlineEcoContribution get($offset)
 * @method  UpdateOrderlineEcoContribution offsetGet($offset)
 * @method  UpdateOrderlineEcoContribution last()
 */
class UpdateOrderlineEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOrderlineEcoContribution::class;
}