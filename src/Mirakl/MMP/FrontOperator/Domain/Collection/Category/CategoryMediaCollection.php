<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Category;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Category\CategoryMedia;

/**
 * @method  CategoryMedia   current()
 * @method  CategoryMedia   first()
 * @method  CategoryMedia   get($offset)
 * @method  CategoryMedia   offsetGet($offset)
 * @method  CategoryMedia   last()
 */
class CategoryMediaCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CategoryMedia::class;
}