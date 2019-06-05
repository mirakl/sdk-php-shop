<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Cancelation;

/**
 * @method  Cancelation  current()
 * @method  Cancelation  first()
 * @method  Cancelation  get($offset)
 * @method  Cancelation  offsetGet($offset)
 * @method  Cancelation  last()
 */
class CancelationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Cancelation::class;
}