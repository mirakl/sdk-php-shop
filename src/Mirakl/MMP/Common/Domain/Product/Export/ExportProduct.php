<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Product\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductReferenceCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\ProductMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductShopSkuCollection;
use Mirakl\MMP\Common\Domain\Product\Measurement\ProductMeasurement;

/**
 * @method bool                             isActive()
 * @method $this                            setActive(bool $active)
 * @method array                            getAuthorizedShops()
 * @method $this                            setAuthorizedShops(array $authorizedShops)
 * @method string                           getBrand()
 * @method $this                            setBrand(string $brand)
 * @method string                           getCategory()
 * @method $this                            setCategory(string $category)
 * @method string                           getDescription()
 * @method $this                            setDescription(string $description)
 * @method string                           getLogisticClassCode()
 * @method $this                            setLogisticClassCode(string $logisticClassCode)
 * @method ProductMeasurement               getMeasurement()
 * @method $this                            setMeasurement(ProductMeasurement|array $measurement)
 * @method ProductMediaCollection           getMedias()
 * @method $this                            setMedia(ProductMediaCollection|array $medias)
 * @method ExportProductReferenceCollection getReferences()
 * @method $this                            setReferences(ExportProductReferenceCollection|array $references)
 * @method ExportProductShopSkuCollection   getShopSkus()
 * @method $this                            setShopSkus(ExportProductShopSkuCollection|array $shopSkus)
 * @method string                           getSku()
 * @method $this                            setSku(string $sku)
 * @method string                           getTitle()
 * @method $this                            setTitle(string $title)
 * @method string                           getUrl()
 * @method $this                            setUrl(string $url)
 * @method string                           getVariantGroupCode()
 * @method $this                            setVariantGroupCode(string $variantGroupCode)
 *
 */
class ExportProduct extends MiraklObject
{
    /**
     * @var array
     *
     */
    protected static $mapping = [
        'logistic_class' => 'logistic_class_code',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'measurement' => [ProductMeasurement::class, 'create'],
        'medias'      => [ProductMediaCollection::class, 'create'],
        'references'  => [ExportProductReferenceCollection::class, 'create'],
        'shop_skus'   => [ExportProductShopSkuCollection::class, 'create'],
    ];
}
