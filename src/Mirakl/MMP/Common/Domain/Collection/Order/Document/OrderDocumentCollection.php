<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\Document;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Document\OrderDocument;

/**
 * @method  OrderDocument   current()
 * @method  OrderDocument   first()
 * @method  OrderDocument   get($offset)
 * @method  OrderDocument   offsetGet($offset)
 * @method  OrderDocument   last()
 */
class OrderDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderDocument::class;
}