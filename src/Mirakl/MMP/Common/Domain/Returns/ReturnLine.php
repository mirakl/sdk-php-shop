<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnLineComplianceCollection;

/**
 * @method ReturnLineComplianceCollection getCompliance()
 * @method $this                          setCompliance(ReturnLineComplianceCollection|array $compliance)
 * @method string                         getOrderLineId()
 * @method $this                          setOrderLineId(string $orderLineId)
 * @method int                            getQuantity()
 * @method $this                          setQuantity(int $quantity)
 * @method string                         getReasonCode()
 * @method $this                          setReasonCode(string $reasonCode)
 */
class ReturnLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'compliance' => [ReturnLineComplianceCollection::class, 'create'],
    ];
}
