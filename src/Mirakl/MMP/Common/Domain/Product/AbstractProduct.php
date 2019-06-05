<?php
namespace Mirakl\MMP\Common\Domain\Product;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 * @method  string  getIdType()
 * @method  $this   setIdType(string $idType)
 */
abstract class AbstractProduct extends ProductInfo
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_id'      => 'id',
        'product_id_type' => 'id_type',
        'product_sku'     => 'sku',
        'product_title'   => 'title',
        'category_code'   => 'category/code',
        'category_label'  => 'category/label',
        'category_type'   => 'category/type',
    ];
}