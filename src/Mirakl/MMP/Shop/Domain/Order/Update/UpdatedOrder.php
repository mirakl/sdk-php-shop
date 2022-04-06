<?php
namespace Mirakl\MMP\Shop\Domain\Order\Update;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  UpdatedReferences   getReferences()
 * @method  $this               setReferences(UpdatedReferences $references)
 */
class UpdatedOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'references' => [UpdatedReferences::class, 'create'],
    ];
}