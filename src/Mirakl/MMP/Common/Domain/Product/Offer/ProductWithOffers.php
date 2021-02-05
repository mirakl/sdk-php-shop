<?php
namespace Mirakl\MMP\Common\Domain\Product\Offer;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Product\Offer\OfferOnProductCollection;
use Mirakl\MMP\Common\Domain\Offer\ProductInfoWithRefs;

/**
 * @method  OfferOnProductCollection    getOffers()
 * @method  $this                       setOffers(array|OfferOnProductCollection $offers)
 * @method  ProductInfoWithRefs         getProduct()
 * @method  $this                       setProduct(array|ProductInfoWithRefs $productInfoWithRefs)
 * @method  int                         getTotalCount()
 * @method  int                         setTotalCount(int $totalCount)
 *
 * @deprecated Use FrontOperator or Shop class instead
 * @see \Mirakl\MMP\FrontOperator\Domain\Product\Offer\ProductWithOffers
 * @see \Mirakl\MMP\Shop\Domain\Product\Offer\ProductWithOffers
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