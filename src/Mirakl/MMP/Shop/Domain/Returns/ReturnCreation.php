<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Returns\ReturnCreationReturnLineCollection;

/**
 * @method bool                               getAccepted()
 * @method $this                              setAccepted(bool $accepted)
 * @method string                             getDescription()
 * @method $this                              setDescription(string $description)
 * @method string                             getLabelUrl()
 * @method $this                              setLabelUrl(string $labelUrl)
 * @method string                             getMethodCode()
 * @method $this                              setMethodCode(string $methodCode)
 * @method string                             getOrderCommercialId()
 * @method $this                              setOrderCommercialId(string $orderCommercialId)
 * @method string                             getReasonCode()
 * @method $this                              setReasonCode(string $reasonCode)
 * @method ReturnCreationReturnLineCollection getReturnLines()
 * @method $this                              setReturnLines(array|ReturnCreationReturnLineCollection $returnLines)
 * @method string                             getRma()
 * @method $this                              setRma(string $rma)
 */
class ReturnCreation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_lines' => [ReturnCreationReturnLineCollection::class, 'create'],
    ];
}
