<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\ProductFeedImportError;

/**
 * @method ProductFeedImportError current()
 * @method ProductFeedImportError first()
 * @method ProductFeedImportError get($offset)
 * @method ProductFeedImportError offsetGet($offset)
 * @method ProductFeedImportError last()
 */
class ProductFeedImportErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductFeedImportError::class;
}