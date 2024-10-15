<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\EcoContribution\OrderLineEcoContribution;

/**
 * @method OrderLineEcoContribution current()
 * @method OrderLineEcoContribution first()
 * @method OrderLineEcoContribution get($offset)
 * @method OrderLineEcoContribution offsetGet($offset)
 * @method OrderLineEcoContribution last()
 */
class OrderLineEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineEcoContribution::class;
}
