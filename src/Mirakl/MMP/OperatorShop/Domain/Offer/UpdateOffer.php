<?php
namespace Mirakl\MMP\OperatorShop\Domain\Offer;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Discount;
use Mirakl\MMP\OperatorShop\Domain\Collection\Offer\UpdateOfferPricesCollection;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  UpdateOfferPricesCollection     getAllPrices()
 * @method  $this                           setAllPrices(array|UpdateOfferPricesCollection $prices)
 * @method  bool                            getAllowQuoteRequests()
 * @method  $this                           setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method  \DateTime                       getAvailableEnded()
 * @method  $this                           setAvailableEnded(\DateTime $availableEnded)
 * @method  \DateTime                       getAvailableStarted()
 * @method  $this                           setAvailableStarted(\DateTime $availableStarted)
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  Discount                        getDiscount()
 * @method  $this                           setDiscount(array|Discount $discount)
 * @method  string                          getInternalDescription()
 * @method  $this                           setInternalDescription(string $internalDescription)
 * @method  int                             getLeadtimeToShip() (in days)
 * @method  $this                           setLeadtimeToShip(int $leadtimeToShip)
 * @method  string                          getLogisticClass()
 * @method  $this                           setLogisticClass(string $logisticClass)
 * @method  int                             getMaxOrderQuantity()
 * @method  $this                           setMaxOrderQuantity(int $maxOrderQuantity)
 * @method  int                             getMinOrderQuantityx()
 * @method  $this                           setMinOrderQuantity(int $minOrderQuantity)
 * @method  int                             getMinQuantityAlert()
 * @method  $this                           setMinQuantityAlert(int $minQuantityAlert)
 * @method  int                             getPackageQuantity()
 * @method  $this                           setPackageQuantity(int $packageQuantity)
 * @method  float                           getPrice()
 * @method  $this                           setPrice(float $price)
 * @method  string                          getPriceAdditionalInfo()
 * @method  $this                           setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method  string                          getProductId()
 * @method  $this                           setProductId(string $id)
 * @method  string                          getProductIdType()
 * @method  $this                           setProductIdType(string $idType)
 * @method  string                          getProductTaxCode()
 * @method  $this                           setProductTaxCode(string $productTaxCode)
 * @method  int                             getQuantity()
 * @method  $this                           setQuantity(int $qty)
 * @method  string                          getShopSku()
 * @method  $this                           setShopSku(string $shopSku)
 * @method  string                          getStateCode()
 * @method  $this                           setStateCode(string $code)
 * @method  string                          getUpdateDelete()
 * @method  $this                           setUpdateDelete(string $updateDelete)
 */
class UpdateOffer extends MiraklObject
{
    use DateRangeTrait;

    /**
     * @var array
     */
    protected static $mapping = [
        'available_ended'   => 'start_date',
        'available_started' => 'end_date',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'discount'          => [Discount::class, 'create'],
        'all_prices'        => [UpdateOfferPricesCollection::class, 'create'],
    ];
}