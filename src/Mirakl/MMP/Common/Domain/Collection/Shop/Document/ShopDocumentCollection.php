<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shop\Document;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shop\Document\ShopDocument;

/**
 * @method  ShopDocument    current()
 * @method  ShopDocument    first()
 * @method  ShopDocument    get($offset)
 * @method  ShopDocument    offsetGet($offset)
 * @method  ShopDocument    last()
 */
class ShopDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopDocument::class;
}