<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\CancelationCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\OrderLineEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\FeeCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\RefundCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Collection\Product\ProductMediaCollection;
use Mirakl\MMP\Common\Domain\Collection\Promotion\AppliedPromotionCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;
use Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLineShippingFrom;
use Mirakl\MMP\Common\Domain\Order\State\OrderLineStatus;

/**
 * @method AdditionalFieldValueCollection     getAdditionalFields()
 * @method $this                              setAdditionalFields(AdditionalFieldValueCollection|array $additionalFields)
 * @method bool                               getCanRefund()
 * @method $this                              setCanRefund(bool $canRefund)
 * @method CancelationCollection              getCancelations()
 * @method $this                              setCancelations(CancelationCollection|array $cancelations)
 * @method OrderLineCommission                getCommission()
 * @method $this                              setCommission(OrderLineCommission|array $commission)
 * @method OrderLineEcoContributionCollection getEcoContributions()
 * @method $this                              setEcoContributions(OrderLineEcoContributionCollection|array $ecoContributions)
 * @method FeeCollection                      getFees()
 * @method $this                              setFees(FeeCollection|array $fees)
 * @method OrderLineHistory                   getHistory()
 * @method $this                              setHistory(OrderLineHistory|array $history)
 * @method string                             getId()
 * @method $this                              setId(string $id)
 * @method int                                getIndex()
 * @method $this                              setIndex(int $index)
 * @method OrderLineMeasurement               getMeasurement()
 * @method $this                              setMeasurement(OrderLineMeasurement|array $measurement)
 * @method OrderLineOfferInfo                 getOffer()
 * @method $this                              setOffer(OrderLineOfferInfo|array $offer)
 * @method float                              getPrice()
 * @method $this                              setPrice(float $price)
 * @method string                             getPriceAdditionalInfo()
 * @method $this                              setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method AmountBreakdown                    getPriceAmountBreakdown()
 * @method $this                              setPriceAmountBreakdown(AmountBreakdown|array $priceAmountBreakdown)
 * @method ProductMediaCollection             getProductMedia()
 * @method $this                              setProductMedia(ProductMediaCollection|array $productMedia)
 * @method AppliedPromotionCollection         getPromotions()
 * @method $this                              setPromotions(AppliedPromotionCollection|array $promotions)
 * @method PurchaseInformation                getPurchaseInformation()
 * @method $this                              setPurchaseInformation(PurchaseInformation|array $purchaseInformation)
 * @method int                                getQuantity()
 * @method $this                              setQuantity(int $quantity)
 * @method RefundCollection                   getRefunds()
 * @method $this                              setRefunds(RefundCollection|array $refunds)
 * @method OrderLineShippingFrom              getShippingFrom()
 * @method $this                              setShippingFrom(OrderLineShippingFrom|array $shippingFrom)
 * @method float                              getShippingPrice()
 * @method $this                              setShippingPrice(float $shippingPrice)
 * @method AmountBreakdown                    getShippingPriceAmountBreakdown()
 * @method $this                              setShippingPriceAmountBreakdown(AmountBreakdown|array $shippingPriceAmountBreakdown)
 * @method OrderTaxAmountCollection           getShippingTaxes()
 * @method $this                              setShippingTaxes(OrderTaxAmountCollection|array $shippingTaxes)
 * @method OrderLineStatus                    getStatus()
 * @method $this                              setStatus(OrderLineStatus|array $status)
 * @method string                             getTaxLegalNotice()
 * @method $this                              setTaxLegalNotice(string $taxLegalNotice)
 * @method OrderTaxAmountCollection           getTaxes()
 * @method $this                              setTaxes(OrderTaxAmountCollection|array $taxes)
 * @method float                              getTotalPrice()
 * @method $this                              setTotalPrice(float $totalPrice)
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
        'origin_unit_price'             => 'offer/origin_price',
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
        'additional_fields'               => [AdditionalFieldValueCollection::class, 'create'],
        'cancelations'                    => [CancelationCollection::class, 'create'],
        'commission'                      => [OrderLineCommission::class, 'create'],
        'eco_contributions'               => [OrderLineEcoContributionCollection::class, 'create'],
        'fees'                            => [FeeCollection::class, 'create'],
        'history'                         => [OrderLineHistory::class, 'create'],
        'measurement'                     => [OrderLineMeasurement::class, 'create'],
        'offer'                           => [OrderLineOfferInfo::class, 'create'],
        'price_amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'product_media'                   => [ProductMediaCollection::class, 'create'],
        'promotions'                      => [AppliedPromotionCollection::class, 'create'],
        'purchase_information'            => [PurchaseInformation::class, 'create'],
        'refunds'                         => [RefundCollection::class, 'create'],
        'shipping_from'                   => [OrderLineShippingFrom::class, 'create'],
        'shipping_price_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'                  => [OrderTaxAmountCollection::class, 'create'],
        'status'                          => [OrderLineStatus::class, 'create'],
        'taxes'                           => [OrderTaxAmountCollection::class, 'create'],
    ];
}
