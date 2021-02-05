<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Export\ExportProductShopSku;

/**
 * @method  ExportProductShopSku current()
 * @method  ExportProductShopSku first()
 * @method  ExportProductShopSku get($offset)
 * @method  ExportProductShopSku offsetGet($offset)
 * @method  ExportProductShopSku last()
 */
class ExportProductShopSkuCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ExportProductShopSku::class;
}