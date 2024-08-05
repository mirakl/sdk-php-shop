<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferOfferAdditionalFieldCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferPriceCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferShippingTypeCollection;

/**
 * @method bool                                           getActive()
 * @method $this                                          setActive(bool $active)
 * @method bool                                           getAllowQuoteRequests()
 * @method $this                                          setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method \DateTime                                      getAvailableEndDate()
 * @method $this                                          setAvailableEndDate(\DateTime $availableEndDate)
 * @method \DateTime                                      getAvailableStartDate()
 * @method $this                                          setAvailableStartDate(\DateTime $availableStartDate)
 * @method string[]                                       getChannels()
 * @method $this                                          setChannels(string[] $channels)
 * @method string                                         getCurrencyIsoCode()
 * @method $this                                          setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                                      getDateCreated()
 * @method $this                                          setDateCreated(\DateTime $dateCreated)
 * @method bool                                           getDeleted()
 * @method $this                                          setDeleted(bool $deleted)
 * @method string                                         getDescription()
 * @method $this                                          setDescription(string $description)
 * @method AsyncExportOfferEcoContributionCollection      getEcoContributions()
 * @method $this                                          setEcoContributions(AsyncExportOfferEcoContributionCollection $ecoContributions)
 * @method int                                            getFavoriteRank()
 * @method $this                                          setFavoriteRank(int $favoriteRank)
 * @method AsyncExportOfferFulfillment                    getFulfillment()
 * @method $this                                          setFulfillment(AsyncExportOfferFulfillment $fulfillment)
 * @method \DateTime                                      getLastUpdated()
 * @method $this                                          setLastUpdated(\DateTime $lastUpdated)
 * @method int                                            getLeadtimeToShip()
 * @method $this                                          setLeadtimeToShip(int $leadtimeToShip)
 * @method AsyncExportOfferLogisticClass                  getLogisticClass()
 * @method $this                                          setLogisticClass(AsyncExportOfferLogisticClass $logisticClass)
 * @method int                                            getMaxOrderQuantity()
 * @method $this                                          setMaxOrderQuantity(int $maxOrderQuantity)
 * @method AsyncExportMeasurementUnit                     getMeasurement()
 * @method $this                                          setMeasurement(AsyncExportMeasurementUnit $measurement)
 * @method int                                            getMinOrderQuantity()
 * @method $this                                          setMinOrderQuantity(int $minOrderQuantity)
 * @method float                                          getMinShippingPrice()
 * @method $this                                          setMinShippingPrice(float $minShippingPrice)
 * @method float                                          getMinShippingPriceAdditional()
 * @method $this                                          setMinShippingPriceAdditional(float $minShippingPriceAdditional)
 * @method string                                         getMinShippingType()
 * @method $this                                          setMinShippingType(string $minShippingType)
 * @method string                                         getMinShippingZone()
 * @method $this                                          setMinShippingZone(string $minShippingZone)
 * @method string                                         getModel()
 * @method $this                                          setModel(string $model)
 * @method bool                                           getNoCommission()
 * @method $this                                          setNoCommission(bool $noCommission)
 * @method AsyncExportOfferOfferAdditionalFieldCollection getOfferAdditionalFields()
 * @method $this                                          setOfferAdditionalFields(AsyncExportOfferOfferAdditionalFieldCollection $offerAdditionalFields)
 * @method string                                         getOfferId()
 * @method $this                                          setOfferId(string $offerId)
 * @method int                                            getPackageQuantity()
 * @method $this                                          setPackageQuantity(int $packageQuantity)
 * @method bool                                           getPremium()
 * @method $this                                          setPremium(bool $premium)
 * @method string                                         getPriceAdditionalInfo()
 * @method $this                                          setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method AsyncExportOfferPriceCollection                getPrices()
 * @method $this                                          setPrices(AsyncExportOfferPriceCollection $prices)
 * @method string                                         getProductSku()
 * @method $this                                          setProductSku(string $productSku)
 * @method string                                         getProductTaxCode()
 * @method $this                                          setProductTaxCode(string $productTaxCode)
 * @method bool                                           getProfessional()
 * @method $this                                          setProfessional(bool $professional)
 * @method int                                            getQuantity()
 * @method $this                                          setQuantity(int $quantity)
 * @method AsyncExportOfferShippingTypeCollection         getShippingTypes()
 * @method $this                                          setShippingTypes(AsyncExportOfferShippingTypeCollection $shippingTypes)
 * @method string                                         getShopId()
 * @method $this                                          setShopId(string $shopId)
 * @method string                                         getShopName()
 * @method $this                                          setShopName(string $shopName)
 * @method string                                         getShopSku()
 * @method $this                                          setShopSku(string $shopSku)
 * @method string                                         getStateCode()
 * @method $this                                          setStateCode(string $stateCode)
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
