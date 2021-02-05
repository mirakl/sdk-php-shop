<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\Accept;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Accept\AcceptOrderLine;

/**
 * @method  AcceptOrderLine current()
 * @method  AcceptOrderLine first()
 * @method  AcceptOrderLine get($offset)
 * @method  AcceptOrderLine offsetGet($offset)
 * @method  AcceptOrderLine last()
 */
class AcceptOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AcceptOrderLine::class;
}