<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\MiraklReturnCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Returns\ReturnUpdateErrorCollection;

/**
 * @method MiraklReturnCollection      getReturnSuccess()
 * @method $this                       setReturnSuccess(MiraklReturnCollection|array $returnSuccess)
 * @method ReturnUpdateErrorCollection getReturnErrors()
 * @method $this                       setReturnErrors(ReturnUpdateErrorCollection|array $returnErrors)
 */
abstract class AbstractUpdateReturnsResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_success' => [MiraklReturnCollection::class, 'create'],
        'return_errors'  => [ReturnUpdateErrorCollection::class, 'create'],
    ];
}
