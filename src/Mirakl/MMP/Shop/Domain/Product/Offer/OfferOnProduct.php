<?php
namespace Mirakl\MMP\Shop\Domain\Product\Offer;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Price\OfferPricesCollection;
use Mirakl\MMP\Common\Domain\Offer\OfferMinimumShipping;
use Mirakl\MMP\Common\Domain\Offer\ProductInfoWithRefs;
use Mirakl\MMP\Common\Domain\Offer\Price\OfferPricing;

/**
 * @method  bool                    getActive()
 * @method  $this                   setActive(bool $active)
 * @method  bool                    isActive()
 * @method  bool                    getAllowQuoteRequests()
 * @method  $this                   setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method  OfferPricesCollection   getAllPrices()
 * @method  $this                   setAllPrices(array|OfferPricesCollection $prices)
 * @method  OfferPricing            getApplicablePricing()
 * @method  $this                   setApplicablePricing(array|OfferPricing $prices)
 * @method  string                  getCurrencyIsoCode()
 * @method  $this                   setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string                  getDescription()
 * @method  $this                   setDescription(string $description)
 * @method  int                     getLeadtimeToShip() (in days)
 * @method  $this                   setLeadtimeToShip(int $leadtimeToShip)
 * @method  OfferMinimumShipping    getMinShipping()
 * @method  $this                   setMinShipping(array|OfferMinimumShipping $minShipping)
 * @method  int                     getNbEvaluation()
 * @method  $this                   setNbEvaluation(int $nbEvaluation)
 * @method  bool                    getProfessional()
 * @method  $this                   setProfessional(bool $flag)
 * @method  bool                    isProfessional()
 * @method  float                   getPrice()
 * @method  $this                   setPrice(float $price)
 * @method  string                  getPriceAdditionalInfo()
 * @method  $this                   setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method  ProductInfoWithRefs     getProduct()
 * @method  $this                   setProduct(array|ProductInfoWithRefs $productInfoWithRefs)
 * @method  int                     getShopGrade()
 * @method  $this                   setShopGrade(int $shopGrade)
 * @method  string                  getShopName()
 * @method  $this                   setShopName(string $shopName)
 * @method  string                  getStateCode()
 * @method  $this                   setStateCode(string $stateCode)
 * @method  float                   getTotalPrice()
 * @method  $this                   setTotalPrice(float $totalPrice)
 */
class OfferOnProduct extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'id'                            => 'offer_id',
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
        'is_professional'               => 'professional',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'min_shipping'          => [OfferMinimumShipping::class, 'create'],
        'product'               => [ProductInfoWithRefs::class, 'create'],
        'all_prices'            => [OfferPricesCollection::class, 'create'],
        'applicable_pricing'    => [OfferPricing::class, 'create'],
    ];

    /**
     * @param   mixed   $product
     * @return  $this
     */
    public function setProductReferences($product)
    {
        if (is_array($product)) {
            $product = ProductInfoWithRefs::create(['references' => $product]);
        }

        return $this->setProduct($product);
    }
}