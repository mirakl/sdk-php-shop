<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\MiraklReturnCollection;
use Mirakl\MMP\Shop\Domain\Collection\Returns\ReturnCreationErrorCollection;

/**
 * @method MiraklReturnCollection        getReturnSuccess()
 * @method $this                         setReturnSuccess(array|MiraklReturnCollection $returnSuccess)
 * @method ReturnCreationErrorCollection getReturnErrors()
 * @method $this                         setReturnErrors(array|ReturnCreationErrorCollection $returnErrors)
 */
class ReturnCreationResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_success' => [MiraklReturnCollection::class, 'create'],
        'return_errors'  => [ReturnCreationErrorCollection::class, 'create'],
    ];
}
