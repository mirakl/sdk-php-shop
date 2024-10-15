<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedCancelationEcoContributionCollection;

/**
 * @method string                                      getCancelationId()
 * @method $this                                       setCancelationId(string $cancelationId)
 * @method UpdatedCancelationEcoContributionCollection getEcoContributions()
 * @method $this                                       setEcoContributions(UpdatedCancelationEcoContributionCollection|array $ecoContributions)
 */
class UpdatedCancelation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [UpdatedCancelationEcoContributionCollection::class, 'create']
    ];
}
