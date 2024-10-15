<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderlineEcoContributionCollection;

/**
 * @method string                                   getOrderLineId()
 * @method $this                                    setOrderLineId(string $orderLineId)
 * @method UpdateOrderlineEcoContributionCollection getEcoContributions()
 * @method $this                                    setEcoContributions(UpdateOrderlineEcoContributionCollection|array $ecoContributions)
 */
class UpdateOrderLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [UpdateOrderlineEcoContributionCollection::class, 'create']
    ];
}
