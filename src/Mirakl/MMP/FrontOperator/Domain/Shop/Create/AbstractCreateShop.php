<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\Common\Domain\Shop\ProfessionalInfo;

/**
 * @method  CreateShopAddress               getAddress()
 * @method  $this                           setAddress(array|CreateShopAddress $address)
 * @method  \DateTime                       getClosedFromDate()
 * @method  $this                           setClosedFromDate(\DateTime $closedFromDate)
 * @method  \DateTime                       getClosedToDate()
 * @method  $this                           setClosedToDate(\DateTime $closedToDate)
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  string[]                        getDomains()
 * @method  $this                           setDomains(string[] $domains)
 * @method  string                          getEmail()
 * @method  $this                           setEmail(string $email)
 * @method  string                          getFax()
 * @method  $this                           setFax(string $fax)
 * @method  \DateTime                       getImmunizedUntil()
 * @method  $this                           setImmunizedUntil(\DateTime $immunizedUntil)
 * @method  bool                            getIsProfessional()
 * @method  $this                           setIsProfessional(bool $flag)
 * @method  string                          getOperatorInternalId()
 * @method  $this                           setOperatorInternalId(string $operatorInternalId)
 * @method  PaymentInfo                     getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|PaymentInfo $paymentInfo)
 * @method  ProfessionalInfo                getProDetails()
 * @method  $this                           setProDetails(array|ProfessionalInfo $proDetails)
 * @method  string                          getReturnPolicy()
 * @method  $this                           setReturnPolicy(string $policy)
 * @method  string                          getShippingCountry()
 * @method  $this                           setShippingCountry(string $shippingCountry)
 * @method  AdditionalFieldValueCollection  getShopAdditionalFields()
 * @method  $this                           setShopAdditionalFields(array|AdditionalFieldValueCollection $shopAdditionalFields)
 * @method  string                          getShopName()
 * @method  $this                           setShopName(string $shopName)
 * @method  bool                            getSuspend()
 * @method  $this                           setSuspend(bool $flag)
 * @method  bool                            isSuspend()
 * @method  string                          getWebSite()
 * @method  $this                           setWebSite(string $webSite)
 */
abstract class AbstractCreateShop extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'                 => [CreateShopAddress::class, 'create'],
        'additional_field_values' => [AdditionalFieldValueCollection::class, 'create'],
        'payment_info'            => [PaymentInfo::class, 'factory'],
        'professional_info'       => [ProfessionalInfo::class, 'create'],
    ];
}