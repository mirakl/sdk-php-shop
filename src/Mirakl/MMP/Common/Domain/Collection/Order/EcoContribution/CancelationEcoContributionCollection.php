<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\EcoContribution\CancelationEcoContribution;

/**
 * @method CancelationEcoContribution current()
 * @method CancelationEcoContribution first()
 * @method CancelationEcoContribution get($offset)
 * @method CancelationEcoContribution offsetGet($offset)
 * @method CancelationEcoContribution last()
 */
class CancelationEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CancelationEcoContribution::class;
}
