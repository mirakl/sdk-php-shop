<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method Selection getSelection()
 * @method $this     setSelection(array|Selection $selection)
 */
class Reward extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'selection' => [Selection::class, 'factory'],
    ];
}
