<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Category;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Category;

/**
 * @method  Category    current()
 * @method  Category    first()
 * @method  Category    get($offset)
 * @method  Category    offsetGet($offset)
 * @method  Category    last()
 */
class CategoryCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Category::class;
}