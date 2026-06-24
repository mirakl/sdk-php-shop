<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string               getId()
 * @method $this                setId(string $id)
 * @method string               getLabelUrl()
 * @method $this                setLabelUrl(string $labelUrl)
 * @method string               getRma()
 * @method $this                setRma(string $rma)
 * @method UpdateReturnTracking getTracking()
 * @method $this                setTracking(array|UpdateReturnTracking $tracking)
 */
class UpdateReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'tracking' => [UpdateReturnTracking::class, 'create'],
    ];
}
