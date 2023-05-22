<?php
namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderlineEcoContributionCollection;

/**
 * @method  string                                    getOrderLineId()
 * @method  $this                                     setOrderLineId(string $orderLineId)
 * @method  UpdateOrderLineEcoContributionCollection  getEcoContributions()
 * @method  $this                                     setEcoContributions(UpdateOrderlineEcoContributionCollection|array $ecoContributions)
 */
class UpdateOrderLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [UpdateOrderLineEcoContributionCollection::class, 'create']
    ];
}