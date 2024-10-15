<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Product\ProductInfo;

/**
 * @method string      getDescription()
 * @method $this       setDescription(string $description)
 * @method int         getId()
 * @method $this       setId(int $id)
 * @method float       getOriginPrice()
 * @method $this       setOriginPrice(float $originPrice)
 * @method float       getPrice()
 * @method $this       setPrice(float $price)
 * @method ProductInfo getProduct()
 * @method $this       setProduct(array|ProductInfo $productInfo)
 * @method string      getSku()
 * @method $this       setSku(string $sku)
 * @method string      getStateCode()
 * @method $this       setStateCode(string $code)
 */
class OrderLineOfferInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer_id'          => 'id',
        'offer_state_code'  => 'state_code',
        'offer_sku'         => 'sku',
        'price_unit'        => 'price',
        'origin_unit_price' => 'origin_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'product' => [ProductInfo::class, 'create'],
    ];
}
