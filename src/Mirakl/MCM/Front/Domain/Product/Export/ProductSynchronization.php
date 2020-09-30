<?php
namespace Mirakl\MCM\Front\Domain\Product\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductIntegrationErrorCollection;

/**
 * @method  ProductIntegrationErrorCollection   getIntegrationErrors()
 * @method  $this                               setIntegrationErrors(ProductIntegrationErrorCollection $integrationErrors)
 * @method  string                              getStatus()
 * @method  $this                               setStatus(string $status)
 */
class ProductSynchronization extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'integration_errors' => [ProductIntegrationErrorCollection::class, 'create'],
    ];
}