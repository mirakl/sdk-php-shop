<?php
namespace Mirakl\MMP\Shop\Domain\Offer;

use Mirakl\MMP\Common\Domain\Offer\AbstractOffer;

/**
 * @method  string  getSku()
 * @method  $this   setSku(string $sku)
 */
class ShopOffer extends AbstractOffer
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_sku'                   => 'product/sku',
        'product_title'                 => 'product/title',
        'product_references'            => 'product/references',
        'category_code'                 => 'product/category/code',
        'category_label'                => 'product/category/label',
        'category_type'                 => 'product/category/type',
        'min_shipping_price'            => 'min_shipping/price',
        'min_shipping_price_additional' => 'min_shipping/price_additional',
        'min_shipping_type'             => 'min_shipping/type_code',
        'min_shipping_zone'             => 'min_shipping/zone_code',
        'available_start_date'          => 'availability/start_date',
        'available_end_date'            => 'availability/end_date',
        'offer_additional_fields'       => 'additional_fields',
        'shop_sku'                      => 'sku',
    ];
}