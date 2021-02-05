<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\RefundCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\AppliedPromotionCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;
use Mirakl\MMP\Common\Domain\Order\State\OrderLineStatus;
use Mirakl\MMP\Common\Domain\Collection\Product\ProductMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\CancelationCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  CancelationCollection           getCancelations()
 * @method  $this                           setCancelations(array|CancelationCollection $cancelations)
 * @method  bool                            getCanRefund()
 * @method  $this                           setCanRefund(bool $flag)
 * @method  OrderLineCommission             getCommission()
 * @method  $this                           setCommission(array|OrderLineCommission $commission)
 * @method  OrderLineHistory                getHistory()
 * @method  $this                           setHistory(array|OrderLineHistory $history)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  int                             getIndex()
 * @method  $this                           setIndex(int $index)
 * @method  OrderLineOfferInfo              getOffer()
 * @method  $this                           setOffer(array|OrderLineOfferInfo $offer)
 * @method  float                           getPrice()
 * @method  $this                           setPrice(float $price)
 * @method  string                          getPriceAdditionalInfo()
 * @method  $this                           setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method  AmountBreakdown                 getPriceAmountBreakdown()
 * @method  $this                           setPriceAmountBreakdown(AmountBreakdown $priceAmountBreakdown)
 * @method  ProductMediaCollection          getProductMedia()
 * @method  $this                           setProductMedia(array|ProductMediaCollection $media)
 * @method  AppliedPromotionCollection      getPromotions()
 * @method  $this                           setPromotions(array|AppliedPromotionCollection $promotions)
 * @method  int                             getQuantity()
 * @method  $this                           setQuantity(int $qty)
 * @method  RefundCollection                getRefunds()
 * @method  $this                           setRefunds(array|RefundCollection $refunds)
 * @method  float                           getShippingPrice()
 * @method  $this                           setShippingPrice(float $price)
 * @method  AmountBreakdown                 getShippingPriceAmountBreakdown()
 * @method  $this                           setShippingPriceAmountBreakdown(AmountBreakdown $shippingPriceAmountBreakdown)
 * @method  OrderTaxAmountCollection        getShippingTaxes()
 * @method  $this                           setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  OrderLineStatus                 getStatus()
 * @method  $this                           setStatus(array|OrderLineStatus $status)
 * @method  OrderTaxAmountCollection        getTaxes()
 * @method  $this                           setTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  float                           getTotalPrice()
 * @method  $this                           setTotalPrice(float $price)
 */
class ShopOrderLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'created_date'                  => 'history/created_date',
        'debited_date'                  => 'history/debited_date',
        'last_updated_date'             => 'history/last_updated_date',
        'received_date'                 => 'history/received_date',
        'shipped_date'                  => 'history/shipped_date',
        'category_code'                 => 'offer/product/category/code',
        'category_label'                => 'offer/product/category/label',
        'category_type'                 => 'offer/product/category/type',
        'offer_id'                      => 'offer/id',
        'offer_sku'                     => 'offer/sku',
        'offer_state_code'              => 'offer/state_code',
        'description'                   => 'offer/description',
        'price_unit'                    => 'offer/price',
        'product_sku'                   => 'offer/product/sku',
        'product_title'                 => 'offer/product/title',
        'product_medias'                => 'product_media',
        'order_line_id'                 => 'id',
        'order_line_index'              => 'index',
        'order_line_additional_fields'  => 'additional_fields',
        'order_line_state'              => 'status/state',
        'order_line_state_reason_code'  => 'status/reason/code',
        'order_line_state_reason_label' => 'status/reason/label',
        'state'                         => 'status', // state is deprecated
        'commission_fee'                => 'commission/fee',
        'commission_rate_vat'           => 'commission/tax_rate',
        'commission_vat'                => 'commission/tax',
        'commission_taxes'              => 'commission/commission_taxes',
        'total_commission'              => 'commission/total',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_fields'                 => [AdditionalFieldValueCollection::class, 'create'],
        'cancelations'                      => [CancelationCollection::class, 'create'],
        'commission'                        => [OrderLineCommission::class, 'create'],
        'history'                           => [OrderLineHistory::class, 'create'],
        'offer'                             => [OrderLineOfferInfo::class, 'create'],
        'product_media'                     => [ProductMediaCollection::class, 'create'],
        'promotions'                        => [AppliedPromotionCollection::class, 'create'],
        'refunds'                           => [RefundCollection::class, 'create'],
        'shipping_taxes'                    => [OrderTaxAmountCollection::class, 'create'],
        'status'                            => [OrderLineStatus::class, 'create'],
        'taxes'                             => [OrderTaxAmountCollection::class, 'create'],
        'price_amount_breakdown'            => [AmountBreakdown::class, 'create'],
        'shipping_price_amount_breakdown'   => [AmountBreakdown::class, 'create'],
    ];
}