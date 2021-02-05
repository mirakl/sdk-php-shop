<?php
namespace Mirakl\MMP\Common\Domain\Offer;

use Mirakl\MMP\Common\Domain\Collection\Product\Offer\ProductReferenceCollection;
use Mirakl\MMP\Common\Domain\Product\ProductInfo;

/**
 * @method  ProductReferenceCollection  getReferences()
 * @method  $this                       setReferences(array|ProductReferenceCollection $references)
 */
class ProductInfoWithRefs extends ProductInfo
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'references' => [ProductReferenceCollection::class, 'create'],
    ];
}