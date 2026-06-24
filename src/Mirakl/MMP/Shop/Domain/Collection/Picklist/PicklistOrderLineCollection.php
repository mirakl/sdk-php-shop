<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Picklist;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Picklist\PicklistOrderLine;

/**
 * @method PicklistOrderLine current()
 * @method PicklistOrderLine first()
 * @method PicklistOrderLine get($offset)
 * @method PicklistOrderLine offsetGet($offset)
 * @method PicklistOrderLine last()
 */
class PicklistOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PicklistOrderLine::class;
}
