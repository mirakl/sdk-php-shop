<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedCancelationEcoContribution;

/**
 * @method  UpdatedCancelationEcoContribution current()
 * @method  UpdatedCancelationEcoContribution first()
 * @method  UpdatedCancelationEcoContribution get($offset)
 * @method  UpdatedCancelationEcoContribution offsetGet($offset)
 * @method  UpdatedCancelationEcoContribution last()
 */
class UpdatedCancelationEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedCancelationEcoContribution::class;
}