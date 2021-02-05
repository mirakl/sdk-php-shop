<?php
namespace Mirakl\MMP\Shop\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\AdditionalField;

/**
 * @method  AdditionalField current()
 * @method  AdditionalField first()
 * @method  AdditionalField get($offset)
 * @method  AdditionalField offsetGet($offset)
 * @method  AdditionalField last()
 */
class AdditionalFieldCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdditionalField::class;
}