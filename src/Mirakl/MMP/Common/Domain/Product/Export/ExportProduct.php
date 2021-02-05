<?php
namespace Mirakl\MMP\Common\Domain\Product\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductReferenceCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\ProductMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductShopSkuCollection;

/**
 * @method  bool                                isActive()
 * @method  $this                               setActive(bool $active)
 * @method  array                               getAuthorizedShops()
 * @method  $this                               setAuthorizedShops(array $authorizedShops)
 * @method  string                              getBrand()
 * @method  $this                               setBrand(string $brand)
 * @method  string                              getCategory()
 * @method  $this                               setCategory(string $category)
 * @method  string                              getDescription()
 * @method  $this                               setDescription(string $description)
 * @method  string                              getLogisticClassCode()
 * @method  $this                               setLogisticClassCode(string $logisticClassCode)
 * @method  ExportProductReferenceCollection    getReferences()
 * @method  $this                               setReferences(ExportProductReferenceCollection $references)
 * @method  string                              getUrl()
 * @method  $this                               setUrl(string $url)
 * @method  string                              getVariantGroupCode()
 * @method  $this                               setVariantGroupCode(string $variantGroupCode)
 * @method  string                              getSku()
 * @method  $this                               setSku(string $sku)
 * @method  ExportProductShopSkuCollection      getShopSkus()
 * @method  $this                               setShopSkus(ExportProductShopSkuCollection $shopSkus)
 * @method  ProductMediaCollection              getMedias()
 * @method  $this                               setMedia(ProductMediaCollection $medias)
 * @method  string                              getTitle()
 * @method  $this                               setTitle(string $title)
 *
 */
class ExportProduct extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'references' => [ExportProductReferenceCollection::class, 'create'],
        'shop_skus'  => [ExportProductShopSkuCollection::class, 'create'],
        'medias'     => [ProductMediaCollection::class, 'create'],
    ];
}