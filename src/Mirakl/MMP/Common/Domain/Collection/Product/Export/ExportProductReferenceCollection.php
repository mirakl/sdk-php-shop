<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Export\ExportProductReference;

/**
 * @method  ExportProductReference current()
 * @method  ExportProductReference first()
 * @method  ExportProductReference get($offset)
 * @method  ExportProductReference offsetGet($offset)
 * @method  ExportProductReference last()
 */
class ExportProductReferenceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ExportProductReference::class;
}