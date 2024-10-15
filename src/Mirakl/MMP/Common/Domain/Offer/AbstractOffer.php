<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Category\LogisticClass;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\EcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Price\OfferPricesCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Shipping\ShippingPriceByZoneAndTypeCollection;
use Mirakl\MMP\Common\Domain\Discount;
use Mirakl\MMP\Common\Domain\Fulfillment\Fulfillment;
use Mirakl\MMP\Common\Domain\Offer\Price\OfferPricing;

/**
 * @method bool                                 getActive()
 * @method $this                                setActive(bool $active)
 * @method bool                                 isActive()
 * @method AdditionalFieldValueCollection       getAdditionalFields()
 * @method $this                                setAdditionalFields(AdditionalFieldValueCollection|array $additionalFields)
 * @method bool                                 getAllowQuoteRequests()
 * @method $this                                setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method OfferPricesCollection                getAllPrices()
 * @method $this                                setAllPrices(OfferPricesCollection|array $Prices)
 * @method OfferPricing                         getApplicablePricing()
 * @method $this                                setApplicablePricing(OfferPricing|array $Prices)
 * @method OfferAvailability                    getAvailability()
 * @method $this                                setAvailability(OfferAvailability|array $availability)
 * @method array                                getChannels()
 * @method string                               getCurrencyIsoCode()
 * @method $this                                setCurrencyIsoCode(string $currencyIsoCode)
 * @method string                               getDescription()
 * @method $this                                setDescription(string $description)
 * @method Discount                             getDiscount()
 * @method EcoContributionCollection            getEcoContributions()
 * @method $this                                setEcoContributions(EcoContributionCollection|array $ecoContribution)
 * @method int                                  getFavoriteRank()
 * @method $this                                setFavoriteRank(int $favoriteRank)
 * @method Fulfillment                          getFulfillment()
 * @method $this                                setFulfillment(Fulfillment|array $fulfillment)
 * @method array                                getInactivityReasons()
 * @method $this                                setInactivityReasons(array $inactivityReasons)
 * @method int                                  getLeadtimeToShip() // (in days)
 * @method $this                                setLeadtimeToShip(int $leadtimeToShip)
 * @method LogisticClass                        getLogisticClass()
 * @method $this                                setLogisticClass(LogisticClass|array $logisticClass)
 * @method int                                  getMaxOrderQuantity()
 * @method $this                                setMaxOrderQuantity(int $maxOrderQuantity)
 * @method int                                  getMinOrderQuantity()
 * @method $this                                setMinOrderQuantity(int $minOrderQuantity)
 * @method int                                  getMinQuantityAlert()
 * @method $this                                setMinQuantityAlert(int $minQuantityAlert)
 * @method OfferMinimumShipping                 getMinShipping()
 * @method $this                                setMinShipping(OfferMinimumShipping|array $minShipping)
 * @method string                               getModel()
 * @method $this                                setModel(string $model)
 * @method int                                  getOfferId()
 * @method $this                                setOfferId(int $id)
 * @method int                                  getPackageQuantity()
 * @method $this                                setPackageQuantity(int $packageQuantity)
 * @method bool                                 getPremium()
 * @method $this                                setPremium(bool $flag)
 * @method bool                                 isPremium()
 * @method float                                getPrice()
 * @method $this                                setPrice(float $price)
 * @method string                               getPriceAdditionalInfo()
 * @method $this                                setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method ProductInfoWithRefs                  getProduct()
 * @method $this                                setProduct(array|ProductInfoWithRefs|array $productInfoWithRefs)
 * @method string                               getProductTaxCode()
 * @method $this                                setProductTaxCode(string $productTaxCode)
 * @method bool                                 getProfessional()
 * @method $this                                setProfessional(bool $professional)
 * @method bool                                 isProfessional()
 * @method int                                  getQuantity()
 * @method $this                                setQuantity(int $quantity)
 * @method ShippingPriceByZoneAndTypeCollection getShippingTypes()
 * @method $this                                setShippingTypes(ShippingPriceByZoneAndTypeCollection|array $shippingType)
 * @method \DateTime                            getShippingDeadline()
 * @method $this                                setShippingDeadline(\DateTime $shippingDeadline)
 * @method string                               getStateCode()
 * @method $this                                setStateCode(string $stateCode)
 * @method float                                getTotalPrice()
 * @method $this                                setTotalPrice(float $totalPrice)
 */
abstract class AbstractOffer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'id'                            => 'offer_id',
        'product_brand'                 => 'product/brand',
        'product_description'           => 'product/description',
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
        'is_professional'               => 'professional',
        'is_premium'                    => 'premium',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_fields'  => [AdditionalFieldValueCollection::class, 'create'],
        'all_prices'         => [OfferPricesCollection::class, 'create'],
        'applicable_pricing' => [OfferPricing::class, 'create'],
        'availability'       => [OfferAvailability::class, 'create'],
        'discount'           => [Discount::class, 'create'],
        'eco_contributions'  => [EcoContributionCollection::class, 'create'],
        'fulfillment'        => [Fulfillment::class, 'create'],
        'logistic_class'     => [LogisticClass::class, 'create'],
        'min_shipping'       => [OfferMinimumShipping::class, 'create'],
        'product'            => [ProductInfoWithRefs::class, 'create'],
        'shipping_types'     => [ShippingPriceByZoneAndTypeCollection::class, 'create'],
    ];

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getOfferId();
    }

    /**
     * @param array|string $channels
     * @return $this
     */
    public function setChannels($channels)
    {
        if (!is_array($channels)) {
            $channels = $channels ? explode('|', $channels) : [];
        }

        return $this->setData('channels', $channels);
    }

    /**
     * @param array|Discount $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        if (
            is_array($discount) &&
            !(isset($discount['discount_price']) && $discount['discount_price']) &&
            !(isset($discount['ranges']) && $discount['ranges'])
        ) {
            $discount = null;
        }

        return $this->setData('discount', $discount);
    }

    /**
     * @param mixed $product
     * @return $this
     */
    public function setProductReferences($product)
    {
        if (is_array($product)) {
            $product = ProductInfoWithRefs::create(['references' => $product]);
        }

        return $this->setProduct($product);
    }
}
