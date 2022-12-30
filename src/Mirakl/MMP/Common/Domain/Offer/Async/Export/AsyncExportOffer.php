<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferOfferAdditionalFieldCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferPriceCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferShippingTypeCollection;

/**
 * @method  string                                          getOfferId()
 * @method  $this                                           setOfferId(string $id)
 * @method  string                                          getProductSku()
 * @method  $this                                           setProductSku(string $productSku)
 * @method  string                                          getShopSku()
 * @method  $this                                           setShopSku(string $shopSku)
 * @method  \DateTime                                       getLastUpdated()
 * @method  $this                                           setLastUpdated(\DateTime $lastUpdated)
 * @method  string                                          getProductTaxCode()
 * @method  $this                                           setProductTaxCode(string $productTaxCode)
 * @method  bool                                            getNoCommission()
 * @method  $this                                           setNoCommission(bool $noCommission)
 * @method  string                                          getCurrencyIsoCode()
 * @method  $this                                           setCurrencyIsoCode(string $currencyIsoCode)
 * @method  float                                           getMinShippingPrice()
 * @method  $this                                           setMinShippingPrice(float $minShippingPrice)
 * @method  float                                           getMinShippingPriceAdditional()
 * @method  $this                                           setMinShippingPriceAdditional(float $minShippingPriceAdditional)
 * @method  string                                          getMinShippingZone()
 * @method  $this                                           setMinShippingZone(string $minShippingZone)
 * @method  string                                          getMinShippingType()
 * @method  $this                                           setMinShippingType(string $minShippingType)
 * @method  string                                          getPriceAdditionalInfo()
 * @method  $this                                           setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method  int                                             getQuantity()
 * @method  $this                                           setQuantity(int $quantity)
 * @method  string                                          getDescription()
 * @method  $this                                           setDescription(string $description)
 * @method  string                                          getStateCode()
 * @method  $this                                           setStateCode(string $stateCode)
 * @method  string                                          getShopId()
 * @method  $this                                           setShopId(string $shopId)
 * @method  string                                          getShopName()
 * @method  $this                                           setShopName(string $shopName)
 * @method  bool                                            getProfessional()
 * @method  $this                                           setProfessional(bool $professional)
 * @method  bool                                            getPremium()
 * @method  $this                                           setPremium(bool $premium)
 * @method  AsyncExportOfferLogisticClass                   getLogisticClass()
 * @method  $this                                           setLogisticClass(AsyncExportOfferLogisticClass $logisticClass)
 * @method  bool                                            getActive()
 * @method  $this                                           setActive(bool $active)
 * @method  int                                             getFavoriteRank()
 * @method  $this                                           setFavoriteRank(int $favoriteRank)
 * @method  string[]                                        getChannels()
 * @method  $this                                           setChannels(string[] $channels)
 * @method  bool                                            getDeleted()
 * @method  $this                                           setDeleted(bool $deleted)
 * @method  \DateTime                                       getAvailableStartDate()
 * @method  $this                                           setAvailableStartDate(\DateTime $availableStartDate)
 * @method  \DateTime                                       getAvailableEndDate()
 * @method  $this                                           setAvailableEndDate(\DateTime $availableEndDate)
 * @method  int                                             getLeadtimeToShip()
 * @method  $this                                           setLeadtimeToShip(int $leadtimeToShip)
 * @method  bool                                            getAllowQuoteRequests()
 * @method  $this                                           setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method  int                                             getMinOrderQuantity()
 * @method  $this                                           setMinOrderQuantity(int $minOrderQuantity)
 * @method  int                                             getMaxOrderQuantity()
 * @method  $this                                           setMaxOrderQuantity(int $maxOrderQuantity)
 * @method  int                                             getPackageQuantity()
 * @method  $this                                           setPackageQuantity(int $packageQuantity)
 * @method  AsyncExportMeasurementUnit                      getMeasurement()
 * @method  $this                                           setMeasurement(AsyncExportMeasurementUnit $measurement)
 * @method  AsyncExportOfferOfferAdditionalFieldCollection  getOfferAdditionalFields()
 * @method  $this                                           setOfferAdditionalFields(AsyncExportOfferOfferAdditionalFieldCollection $offerAdditionalFields)
 * @method  AsyncExportOfferFulfillment                     getFulfillment()
 * @method  $this                                           setFulfillment(AsyncExportOfferFulfillment $fulfillment)
 * @method  AsyncExportOfferShippingTypeCollection          getShippingTypes()
 * @method  $this                                           setShippingTypes(AsyncExportOfferShippingTypeCollection $shippingTypes)
 * @method  AsyncExportOfferPriceCollection                 getPrices()
 * @method  $this                                           setPrices(AsyncExportOfferPriceCollection $prices)
 * @method  AsyncExportOfferEcoContributionCollection       getEcoContributions()
 * @method  $this                                           setEcoContributions(AsyncExportOfferEcoContributionCollection $ecoContributions)
 */
class AsyncExportOffer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'logistic_class'          => [AsyncExportOfferLogisticClass::class, 'create'],
        'measurement'             => [AsyncExportMeasurementUnit::class, 'create'],
        'offer_additional_fields' => [AsyncExportOfferOfferAdditionalFieldCollection::class, 'create'],
        'fulfillment'             => [AsyncExportOfferFulfillment::class, 'create'],
        'shipping_types'          => [AsyncExportOfferShippingTypeCollection::class, 'create'],
        'prices'                  => [AsyncExportOfferPriceCollection::class, 'create'],
        'eco_contributions'       => [AsyncExportOfferEcoContributionCollection::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'is_professional' => 'professional',
    ];
}