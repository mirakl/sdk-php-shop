<?php
namespace Mirakl\MMP\Front\Domain\Order\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyCode)
 * @method  int                             getLeadtimeToShip()
 * @method  $this                           setLeadtimeToShip(int $leadtimeToShip)
 * @method  string                          getOfferId()
 * @method  $this                           setOfferId(string $offerId)
 * @method  AdditionalFieldValueCollection  getOrderLineAdditionalFields()
 * @method  $this                           setOrderLineAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  string                          getOrderLineId()
 * @method  $this                           setOrderLineId(string $orderLineId)
 * @method  float                           getPrice()
 * @method  $this                           setPrice(float $price)
 * @method  AmountBreakdown                 getPriceAmountBreakdown()
 * @method  $this                           setPriceAmountBreakdown(AmountBreakdown $priceAmountBreakdown)
 * @method  float                           getOfferPrice()
 * @method  $this                           setOfferPrice(float $offerPrice)
 * @method  int                             getQuantity()
 * @method  $this                           setQuantity(int $qty)
 * @method  \DateTime                       getShippingDeadline()
 * @method  $this                           setShippingDeadline(\DateTime $shippingDeadline)
 * @method  float                           getShippingPrice()
 * @method  $this                           setShippingPrice(float $shippingPrice)
 * @method  AmountBreakdown                 getShippingPriceAmountBreakdown()
 * @method  $this                           setShippingPriceAmountBreakdown(AmountBreakdown $shippingPriceAmountBreakdown)
 * @method  OrderTaxAmountCollection        getShippingTaxes()
 * @method  $this                           setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  string                          getShippingTypeCode()
 * @method  $this                           setShippingTypeCode(string $shippingTypeCode)
 * @method  OrderTaxAmountCollection        getTaxes()
 * @method  $this                           setTaxes(array|OrderTaxAmountCollection $taxes)
 */
class CreateOrderOffer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'id'         => 'offer_id',
        'price_unit' => 'offer_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_line_additional_fields'      => [AdditionalFieldValueCollection::class, 'create'],
        'shipping_taxes'                    => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                             => [OrderTaxAmountCollection::class, 'create'],
        'price_amount_breakdown'            => [AmountBreakdown::class, 'create'],
        'shipping_price_amount_breakdown'   => [AmountBreakdown::class, 'create'],
    ];

    /**
     * @return  string
     */
    public function getId()
    {
        return $this->getOfferId();
    }

    /**
     * @param   string  $id
     * @return  $this
     */
    public function setId($id)
    {
        return $this->setOfferId($id);
    }

    /**
     * @return  float
     */
    public function getPriceUnit()
    {
        return $this->getOfferPrice();
    }

    /**
     * @param   float  $priceUnit
     * @return  $this
     */
    public function setPriceUnit($priceUnit)
    {
        return $this->setOfferPrice($priceUnit);
    }
}