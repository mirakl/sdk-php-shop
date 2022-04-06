<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\ProductFeedImportGlobalError;

/**
 * @method ProductFeedImportGlobalError current()
 * @method ProductFeedImportGlobalError first()
 * @method ProductFeedImportGlobalError get($offset)
 * @method ProductFeedImportGlobalError offsetGet($offset)
 * @method ProductFeedImportGlobalError last()
 */
class ProductFeedImportGlobalErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductFeedImportGlobalError::class;
}