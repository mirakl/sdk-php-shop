<?php
namespace Mirakl\MMP\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Category\CategoryInfo;

/**
 * @method  string          getSku()
 * @method  $this           setSku(string $sku)
 * @method  string          getTitle()
 * @method  $this           setTitle(string $title)
 * @method  CategoryInfo    getCategory()
 * @method  $this           setCategory(array|CategoryInfo $category)
 */
class ProductInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_sku'    => 'sku',
        'product_title'  => 'title',
        'category_code'  => 'category/code',
        'category_label' => 'category/label',
        'category_type'  => 'category/type',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'category' => [CategoryInfo::class, 'create'],
    ];
}