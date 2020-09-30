<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\AppliedPromotionCollection;
use Mirakl\MMP\Common\Domain\Discount;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingTypeDetailCollection;

/**
 * @method  bool                            getAllowQuoteRequests()
 * @method  $this                           setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method  Discount                        getDiscount()
 * @method  $this                           setDiscount(array|Discount $discount)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  float                           getLineOnlyShippingPrice()
 * @method  $this                           setLineOnlyShippingPrice(float $price)
 * @method  float                           getLineOnlyTotalPrice()
 * @method  $this                           setLineOnlyTotalPrice(float $price)
 * @method  int                             getLineOriginalQuantity()
 * @method  $this                           setLineOriginalQuantity(int $qty)
 * @method  float                           getLinePrice()
 * @method  $this                           setLinePrice(float $price)
 * @method  int                             getLineQuantity()
 * @method  $this                           setLineQuantity(int $qty)
 * @method  float                           getLineShippingPrice()
 * @method  $this                           setLineShippingPrice(float $price)
 * @method  float                           getLineTotalPrice()
 * @method  $this                           setLineTotalPrice(float $price)
 * @method  AdditionalFieldValueCollection  getOfferAdditionalFields()
 * @method  $this                           setOfferAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  float                           getPrice()
 * @method  $this                           setPrice(float $price)
 * @method  string                          getProductCategoryCode()
 * @method  $this                           setProductCategoryCode(string $productCategoryCode)
 * @method  string                          getProductTaxCode()
 * @method  $this                           setProductTaxCode(string $productTaxCode)
 * @method  AppliedPromotionCollection      getPromotions()
 * @method  $this                           setPromotions(array|AppliedPromotionCollection $promotions)
 * @method  int                             getQuantity()
 * @method  $this                           setQuantity(int $qty)
 * @method  float                           getShippingPriceUnit()
 * @method  $this                           setShippingPriceUnit(float $price)
 * @method  float                           getShippingPriceAdditionalUnit()
 * @method  $this                           setShippingPriceAdditionalUnit(float $price)
 * @method  ShippingTypeDetailCollection    getShippingTypeDetails()
 * @method  $this                           setShippingTypeDetails(array|ShippingTypeDetailCollection $shippingTypeDetails)
 */
abstract class AbstractShippingOffer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'discount'                => [Discount::class, 'create'],
        'offer_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'promotions'              => [AppliedPromotionCollection::class, 'create'],
        'shipping_type_details'   => [ShippingTypeDetailCollection::class, 'create'],
    ];
}