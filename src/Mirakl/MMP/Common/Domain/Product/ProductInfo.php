<?php
namespace Mirakl\MMP\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Category\CategoryInfo;
use Mirakl\MMP\Common\Domain\Product\Measurement\ProductMeasurement;

/**
 * @method  string              getBrand()
 * @method  $this               setBrand(string $brand)
 * @method  CategoryInfo        getCategory()
 * @method  $this               setCategory(array|CategoryInfo $category)
 * @method  string              getDescription()
 * @method  $this               setDescription(string $description)
 * @method  ProductMeasurement  getMeasurement()
 * @method  $this               setMeasurement(ProductMeasurement $measurement)
 * @method  ProductMedia        getMedia()
 * @method  $this               setMedia(ProductMedia $media)
 * @method  string              getSku()
 * @method  $this               setSku(string $sku)
 * @method  string              getTitle()
 * @method  $this               setTitle(string $title)
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
        'category'    => [CategoryInfo::class, 'create'],
        'measurement' => [ProductMeasurement::class, 'create'],
        'media'       => [ProductMedia::class, 'create'],
    ];
}