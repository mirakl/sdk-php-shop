<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Reason;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Reason;

/**
 * @method  Reason  current()
 * @method  Reason  first()
 * @method  Reason  get($offset)
 * @method  Reason  offsetGet($offset)
 * @method  Reason  last()
 */
class ReasonCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Reason::class;
}