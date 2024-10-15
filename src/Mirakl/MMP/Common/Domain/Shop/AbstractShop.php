<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\ProducerIdentifierCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\ShopApplicableTaxCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;

/**
 * A shop is a legal entity or individual who is able to sell products on the Mirakl Marketplace.
 *
 * @method AdditionalFieldValueCollection getAdditionalFieldValues() // List of additional fields
 * @method $this                          setAdditionalFieldValues(AdditionalFieldValueCollection|array $additionalFieldValues)
 * @method ShopApplicableTaxCollection    getApplicableTaxes()
 * @method $this                          setApplicableTaxes(ShopApplicableTaxCollection|array $applicableTaxes)
 * @method int                            getApprovalDelay()
 * @method $this                          setApprovalDelay(int $approvalDelay)
 * @method float                          getApprovalRate()
 * @method $this                          setApprovalRate(float $approvalRate)
 * @method string                         getBanner()
 * @method $this                          setBanner(string $banner)
 * @method BillingInfo                    getBillingInfo()
 * @method $this                          setBillingInfo(BillingInfo|array $billingInfo)
 * @method array                          getChannels() // List of the channel codes
 * @method $this                          setChannels(array $channels)
 * @method \DateTime                      getClosedFrom() // Date from which the shop will be closed for business and it's offers deactivated
 * @method $this                          setClosedFrom(\DateTime $closedFrom)
 * @method \DateTime                      getClosedTo() // Date from which the shop will be opened for business
 * @method $this                          setClosedTo(\DateTime $closedTo)
 * @method ContactInfo                    getContactInfo()
 * @method $this                          setContactInfo(ContactInfo|array $contactInfo)
 * @method string                         getCurrencyIsoCode()
 * @method $this                          setCurrencyIsoCode(string $currencyIsoCode)
 * @method string[]                       getDomains()
 * @method $this                          setDomains(string[] $domains)
 * @method \DateTime                      getDateCreated()
 * @method string                         getDescription()
 * @method $this                          setDescription(string $description)
 * @method int                            getEvaluationsCount()
 * @method $this                          setEvaluationsCount(int $evaluationsCount)
 * @method float                          getGrade()
 * @method $this                          setGrade(float $grade) // Average evaluations grade
 * @method int                            getId()
 * @method $this                          setId(int $id)
 * @method ShopKyc                        getKyc() // Shop KYC information.
 * @method $this                          setKyc(ShopKyc $kyc)
 * @method \DateTime                      getLastUpdatedDate() // Last modification date on any attribute
 * @method string                         getLogo()
 * @method $this                          setLogo(string $logo)
 * @method MediaInfo                      getMediaInfo()
 * @method $this                          setMediaInfo(MediaInfo|array $mediaInfo)
 * @method string                         getModel()
 * @method $this                          setModel(string $model)
 * @method string                         getName()
 * @method $this                          setName(string $name)
 * @method int                            getOffersCount()
 * @method $this                          setOffersCount(int $offersCount)
 * @method int                            getOrderMessagesResponseDelay()
 * @method $this                          setOrderMessagesResponseDelay(int $orderMessagesResponseDelay)
 * @method int                            getOrdersCount()
 * @method $this                          setOrdersCount(int $ordersCount)
 * @method PaymentInfo                    getPaymentInfo()
 * @method $this                          setPaymentInfo(PaymentInfo|array $paymentInfo)
 * @method bool                           getPaymentMethodMandatory()
 * @method $this                          setPaymentMethodMandatory(bool $paymentMethodMandatory)
 * @method bool                           getPremium() // Indicates whether the shop is premium or not
 * @method $this                          setPremium(bool $flag)
 * @method bool                           isPremium()
 * @method bool                           getProfessional() // Indicates whether the shop is professional or not
 * @method $this                          setProfessional(bool $flag)
 * @method bool                           isProfessional()
 * @method ProfessionalInfo               getProfessionalInfo()
 * @method $this                          setProfessionalInfo(array|ProfessionalInfo $professionalInfo)
 * @method array                          getProducerIds() @deprecated Use getProducerIdentifiers() instead
 * @method $this                          setProducerIds(array $producerIds) @deprecated Use setProducerIdentifiers() instead
 * @method ProducerIdentifierCollection   getProducerIdentifiers()
 * @method $this                          setProducerIdentifiers(ProducerIdentifierCollection|array $producerIdentifiers)
 * @method string                         getRecyclingPolicy()
 * @method $this                          setRecyclingPolicy(string $recyclingPolicy)
 * @method string                         getReturnPolicy()
 * @method $this                          setReturnPolicy(string $policy) // Short text indicating the terms of restitution of a product to the shop
 * @method string                         getShippingCountry()
 * @method $this                          setShippingCountry(string $shippingCountry)
 * @method ShippingInfo                   getShippingInfo()
 * @method $this                          setShippingInfo(ShippingInfo|array $shippingInfo)
 * @method ShopStats                      getShopStats()
 * @method $this                          setShopStats(ShopStats|array $shopStats)
 * @method string                         getState()
 * @method $this                          setState(string $state)
 * @method string                         getSuspensionType()
 * @method $this                          setSuspensionType(string $suspensionType)
 */
abstract class AbstractShop extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shop_id'                => 'id',
        'shop_name'              => 'name',
        'shop_additional_fields' => 'additional_field_values',
        'shop_state'             => 'state',
        'contact_informations'   => 'contact_info',
        'shippings'              => 'shipping_info/shipping_rules',
        'is_professional'        => 'professional',
        'pro_details'            => 'professional_info',
        'free_shipping'          => 'shipping_info/free_shipping',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_field_values' => [AdditionalFieldValueCollection::class, 'create'],
        'billing_info'            => [BillingInfo::class, 'create'],
        'contact_info'            => [ContactInfo::class, 'create'],
        'media_info'              => [MediaInfo::class, 'create'],
        'payment_info'            => [PaymentInfo::class, 'factory'],
        'professional_info'       => [ProfessionalInfo::class, 'create'],
        'shipping_info'           => [ShippingInfo::class, 'create'],
        'kyc'                     => [ShopKyc::class, 'create'],
        'shop_stats'              => [ShopStats::class, 'create'],
        'applicable_taxes'        => [ShopApplicableTaxCollection::class, 'create'],
        'producer_identifiers'    => [ProducerIdentifierCollection::class, 'create'],
    ];
}
