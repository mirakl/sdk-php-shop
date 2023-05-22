<?php
namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\RefundEcoContributionCollection;

/**
 * @method  RefundEcoContributionCollection  getEcoContributions()
 * @method  $this                            setEcoContributions(array|RefundEcoContributionCollection $ecoContributions)
 * @method  string                           getId()
 * @method  $this                            setId(string $id)
 */
class RefundCreated extends CreateRefund
{
    /**
     * @var array
     */
    protected static $mapping = [
        'refund_id' => 'id',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [RefundEcoContributionCollection::class, 'create']
    ];
}