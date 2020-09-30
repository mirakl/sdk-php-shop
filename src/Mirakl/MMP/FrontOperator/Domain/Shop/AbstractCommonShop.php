<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\Common\Domain\Shop\ProfessionalInfo;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFieldValues()
 * @method  $this                           setAdditionalFieldValues(array|AdditionalFieldValueCollection $additionalFieldValues)
 * @method  \DateTime                       getClosedFrom()
 * @method  $this                           setClosedFrom(\DateTime $closedFrom)
 * @method  \DateTime                       getClosedTo()
 * @method  $this                           setClosedTo(\DateTime $closedTo)
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  string                          getEmail()
 * @method  $this                           setEmail(string $email)
 * @method  string                          getFax()
 * @method  $this                           setFax(string $fax)
 * @method  \DateTime                       getImmunizedUntil()
 * @method  $this                           setImmunizedUntil(\DateTime $immunizedUntil)
 * @method  string                          getName()
 * @method  $this                           setName(string $name)
 * @method  string                          getOperatorInternalId()
 * @method  $this                           setOperatorInternalId(string $operatorInternalId)
 * @method  PaymentInfo                     getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|PaymentInfo $paymentInfo)
 * @method  bool                            getProfessional()
 * @method  $this                           setProfessional(bool $flag)
 * @method  bool                            isProfessional()
 * @method  ProfessionalInfo                getProfessionalInfo()
 * @method  $this                           setProfessionalInfo(array|ProfessionalInfo $professionalInfo)
 * @method  string                          getReturnPolicy()
 * @method  $this                           setReturnPolicy(string $policy)
 * @method  string                          getShippingCountry()
 * @method  $this                           setShippingCountry(string $shippingCountry)
 * @method  bool                            getSuspend()
 * @method  $this                           setSuspend(bool $flag)
 * @method  bool                            isSuspend()
 * @method  string                          getWebSite()
 * @method  $this                           setWebSite(string $webSite)
 */
abstract class AbstractCommonShop extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'closed_from_date'       => 'closed_from',
        'closed_to_date'         => 'closed_to',
        'shop_name'              => 'name',
        'shop_additional_fields' => 'additional_field_values',
        'is_professional'        => 'professional',
        'pro_details'            => 'professional_info',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_field_values' => [AdditionalFieldValueCollection::class, 'create'],
        'payment_info'            => [PaymentInfo::class, 'factory'],
        'professional_info'       => [ProfessionalInfo::class, 'create'],
    ];
}