<?php
namespace Mirakl\MMP\Common\Domain\Adjust;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Adjust\CreatedAdjustmentCollection;

/**
 * @method  CreatedAdjustmentCollection getAdjustments()
 * @method  $this                       setAdjustments(array|CreatedAdjustmentCollection $adjustments)
 */
class CreatedAdjustments extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'adjustments' => [CreatedAdjustmentCollection::class, 'create'],
    ];
}