<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string                  getCategoryCode()
 * @method  $this                   setCategoryCode(string $code)
 * @method  string                  getCategoryLabel()
 * @method  $this                   setCategoryLabel(string $label)
 * @method  string                  getId()
 * @method  $this                   setId(string $id)
 * @method  string                  getOfferDescription()
 * @method  $this                   setOfferDescription(string $description)
 * @method  string                  getOfferId()
 * @method  $this                   setOfferId(string $offerId)
 * @method  string                  getOfferStateCode()
 * @method  $this                   setOfferStateCode(string $offerStateCode)
 * @method  int                     getOriginalLeadtimeToShip()
 * @method  $this                   setOriginalLeadtimeToShip(int $originalLeadtimeToShip)
 * @method  string                  getPriceAdditionalInfo()
 * @method  $this                   setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method  QuoteLinePriceSummary   getPriceSummary()
 * @method  $this                   setPriceSummary(array|QuoteLinePriceSummary $priceSummary)
 * @method  string                  getProductSku()
 * @method  $this                   setProductSku(string $sku)
 * @method  string                  getProductTitle()
 * @method  $this                   setProductTitle(string $title)
 * @method  int                     getQuantity()
 * @method  $this                   setQuantity(int $qty)
 * @method  string                  getShopSku()
 * @method  $this                   setShopSku(string $shopSku)
 * @method  float                   getUnitPrice()
 * @method  $this                   setUnitPrice(float $unitPrice)
 */
class QuoteLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'price'            => 'price_summary/price',
        'total_commission' => 'price_summary/total_commission',
        'total_price'      => 'price_summary/total_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'price_summary' => [QuoteLinePriceSummary::class, 'create'],
    ];
}