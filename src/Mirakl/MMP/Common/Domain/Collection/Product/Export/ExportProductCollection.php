<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Export\ExportProduct;

/**
 * @method  ExportProduct current()
 * @method  ExportProduct first()
 * @method  ExportProduct get($offset)
 * @method  ExportProduct offsetGet($offset)
 * @method  ExportProduct last()
 */
class ExportProductCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ExportProduct::class;
}