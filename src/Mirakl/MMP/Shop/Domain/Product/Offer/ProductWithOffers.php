<?php
namespace Mirakl\MMP\Shop\Domain\Product\Offer;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Offer\ProductInfoWithRefs;
use Mirakl\MMP\Shop\Domain\Collection\Product\Offer\OfferOnProductCollection;

/**
 * @method  OfferOnProductCollection    getOffers()
 * @method  $this                       setOffers(array|OfferOnProductCollection $offers)
 * @method  ProductInfoWithRefs         getProduct()
 * @method  $this                       setProduct(array|ProductInfoWithRefs $productInfoWithRefs)
 * @method  int                         getTotalCount()
 * @method  int                         setTotalCount(int $totalCount)
 */
class ProductWithOffers extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_sku'        => 'product/sku',
        'product_title'      => 'product/title',
        'product_references' => 'product/references',
        'category_code'      => 'product/category/code',
        'category_label'     => 'product/category/label',
        'category_type'      => 'product/category/type',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'product' => [ProductInfoWithRefs::class, 'create'],
        'offers'  => [OfferOnProductCollection::class, 'create'],
    ];
}