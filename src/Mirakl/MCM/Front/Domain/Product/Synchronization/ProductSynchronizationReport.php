<?php
namespace Mirakl\MCM\Front\Domain\Product\Synchronization;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCM\Front\Domain\Collection\GlobalErrorCollection;
use Mirakl\MCM\Front\Domain\Collection\Product\ProcessedCollection;

/**
 * @method ProcessedCollection   getProcessedItems()
 * @method $this                 setProcessedItems(array|ProcessedCollection $processedItems)
 * @method GlobalErrorCollection getGlobalErrors()
 * @method $this                 setGlobalErrors(array|GlobalErrorCollection $globalErrors)
 */
class ProductSynchronizationReport extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'processed_items' => [ProcessedCollection::class, 'create'],
        'global_errors'   => [GlobalErrorCollection::class, 'create'],
    ];
}