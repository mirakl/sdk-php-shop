<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Picklist;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Picklist\PicklistLine;

/**
 * @method PicklistLine current()
 * @method PicklistLine first()
 * @method PicklistLine get($offset)
 * @method PicklistLine offsetGet($offset)
 * @method PicklistLine last()
 */
class PicklistLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PicklistLine::class;
}
