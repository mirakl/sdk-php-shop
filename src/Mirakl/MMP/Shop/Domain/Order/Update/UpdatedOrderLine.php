<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedCancelationCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedOrderlineEcoContributionCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedRefundCollection;

/**
 * @method string                                    getOrderLineId()
 * @method $this                                     setOrderLineId(string $orderLineId)
 * @method UpdatedOrderlineEcoContributionCollection getEcoContributions()
 * @method $this                                     setEcoContributions(UpdatedOrderlineEcoContributionCollection|array $ecoContributions)
 * @method UpdatedCancelationCollection              getCancelations()
 * @method $this                                     setCancelations(UpdatedCancelationCollection|array $cancelations)
 * @method UpdatedRefundCollection                   getRefunds()
 * @method $this                                     setRefunds(UpdatedRefundCollection|array $refunds)
 */
class UpdatedOrderLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'cancelations'      => [UpdatedCancelationCollection::class, 'create'],
        'eco_contributions' => [UpdatedOrderlineEcoContributionCollection::class, 'create'],
        'refunds'           => [UpdatedRefundCollection::class, 'create']
    ];
}
