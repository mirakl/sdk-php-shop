<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedRefundEcoContribution;

/**
 * @method  UpdatedRefundEcoContribution current()
 * @method  UpdatedRefundEcoContribution first()
 * @method  UpdatedRefundEcoContribution get($offset)
 * @method  UpdatedRefundEcoContribution offsetGet($offset)
 * @method  UpdatedRefundEcoContribution last()
 */
class UpdatedRefundEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedRefundEcoContribution::class;
}