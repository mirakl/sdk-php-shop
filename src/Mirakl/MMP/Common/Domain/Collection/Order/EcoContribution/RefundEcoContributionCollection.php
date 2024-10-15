<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\EcoContribution\RefundEcoContribution;

/**
 * @method RefundEcoContribution current()
 * @method RefundEcoContribution first()
 * @method RefundEcoContribution get($offset)
 * @method RefundEcoContribution offsetGet($offset)
 * @method RefundEcoContribution last()
 */
class RefundEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundEcoContribution::class;
}
