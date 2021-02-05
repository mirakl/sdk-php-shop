<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Product\ProductInfo;

/**
 * @method  string      getDescription()
 * @method  $this       setDescription(string $description)
 * @method  string      getId()
 * @method  $this       setId(string $id)
 * @method  float       getPrice()
 * @method  ProductInfo getProduct()
 * @method  $this       setProduct(array|ProductInfo $productInfo)
 * @method  string      getSku()
 * @method  $this       setSku(string $sku)
 * @method  string      getStateCode()
 * @method  $this       setStateCode(string $code)
 */
class OrderLineOfferInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer_id'         => 'id',
        'offer_state_code' => 'state_code',
        'offer_sku'        => 'sku',
        'price_unit'       => 'price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'product' => [ProductInfo::class, 'create'],
    ];
}