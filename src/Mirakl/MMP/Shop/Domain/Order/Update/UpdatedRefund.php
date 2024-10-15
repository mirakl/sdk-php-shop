<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedRefundEcoContributionCollection;

/**
 * @method string                                 getRefundId()
 * @method $this                                  setRefundId(string $refundId)
 * @method UpdatedRefundEcoContributionCollection getEcoContributions()
 * @method $this                                  setEcoContributions(UpdatedRefundEcoContributionCollection|array $ecoContributions)
 */
class UpdatedRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [UpdatedRefundEcoContributionCollection::class, 'create']
    ];
}
