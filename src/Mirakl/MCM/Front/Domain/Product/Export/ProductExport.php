<?php
namespace Mirakl\MCM\Front\Domain\Product\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductSourceCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductAcceptance;

/**
 * @method  ProductAcceptance       getAcceptance()
 * @method  $this                   setAcceptance(ProductAcceptance $productAcceptance)
 * @method  array                   getCatalogs()
 * @method  $this                   setCatalogs(array $catalogs)
 * @method  \DateTime               getCreationDate()
 * @method  $this                   setCreationDate(\DateTime $creationDate)
 * @method  array                   getDataProduct()
 * @method  $this                   setDataProduct(array $dataProduct)
 * @method  string                  getMiraklProductId()
 * @method  $this                   setMiraklProductId(string $miraklProductId)
 * @method  string                  getProductSku()
 * @method  $this                   setProductSku(string $productSku)
 * @method  ProductSourceCollection getSources()
 * @method  $this                   setSources(ProductSourceCollection $productSourceCollection)
 * @method  ProductSynchronization  getSynchronization()
 * @method  $this                   setSynchronization(ProductSynchronization $productValidation)
 * @method  \DateTime               getUpdateDate()
 * @method  $this                   setUpdateDate(\DateTime $updateDate)
 * @method  ProductValidation       getValidation()
 * @method  $this                   setValidation(ProductValidation $productValidation)
 * @method  string                  getVariantGroupId() @deprecated
 * @method  $this                   setVariantGroupId(string $variantGroupId) @deprecated
 */
class ProductExport extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'data'                      => 'data_product',
        'mirakl_variant_group_id'   => 'variant_group_id', /** @deprecated */
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'sources'           => [ProductSourceCollection::class, 'create'],
        'acceptance'        => [ProductAcceptance::class, 'create'],
        'validation'        => [ProductValidation::class, 'create'],
        'synchronization'   => [ProductSynchronization::class, 'create'],
    ];
}