<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationProcessed;

/**
 * @method ProductSynchronizationProcessed current()
 * @method ProductSynchronizationProcessed first()
 * @method ProductSynchronizationProcessed get($offset)
 * @method ProductSynchronizationProcessed offsetGet($offset)
 * @method ProductSynchronizationProcessed last()
 */
class ProcessedCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductSynchronizationProcessed::class;
}