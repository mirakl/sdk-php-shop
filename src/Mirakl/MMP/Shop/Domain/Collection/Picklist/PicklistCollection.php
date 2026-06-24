<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Picklist;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Picklist\Picklist;

/**
 * @method Picklist current()
 * @method Picklist first()
 * @method Picklist get($offset)
 * @method Picklist offsetGet($offset)
 * @method Picklist last()
 */
class PicklistCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Picklist::class;
}
