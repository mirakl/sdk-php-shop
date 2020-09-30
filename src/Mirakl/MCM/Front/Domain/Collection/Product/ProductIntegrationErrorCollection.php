<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductIntegrationError;

/**
 * @method ProductIntegrationError current()
 * @method ProductIntegrationError first()
 * @method ProductIntegrationError get($offset)
 * @method ProductIntegrationError offsetGet($offset)
 * @method ProductIntegrationError last()
 */
class ProductIntegrationErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductIntegrationError::class;
}