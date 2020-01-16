<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;

/**
 * A shop is a legal entity or individual who is able to sell products on the Mirakl Marketplace.
 *
 * @method  AdditionalFieldValueCollection  getAdditionalFieldValues()          List of additional fields
 * @method  $this                           setAdditionalFieldValues(array|AdditionalFieldValueCollection $additionalFieldValues)
 * @method  BillingInfo                     getBillingInfo()
 * @method  $this                           setBillingInfo(array|BillingInfo $billingInfo)
 * @method  array                           getChannels()                       List of the channel codes
 * @method  $this                           setChannels(array $channels)
 * @method  \DateTime                       getClosedFrom()                     Date from which the shop will be closed for business and it's offers deactivated
 * @method  $this                           setClosedFrom(\DateTime $closedFrom)
 * @method  \DateTime                       getClosedTo()                       Date from which the shop will be opened for business
 * @method  $this                           setClosedTo(\DateTime $closedTo)
 * @method  ContactInfo                     getContactInfo()
 * @method  $this                           setContactInfo(array|ContactInfo $contactInfo)
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string[]                        getDomains()
 * @method  $this                           setDomains(string[] $domains)
 * @method  \DateTime                       getDateCreated()
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  float                           getGrade()
 * @method  $this                           setGrade(float $grade)              Average evaluations grade
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  \DateTime                       getLastUpdatedDate()                Last modification date on any attribute
 * @method  MediaInfo                       getMediaInfo()
 * @method  $this                           setMediaInfo(array|MediaInfo $mediaInfo)
 * @method  string                          getName()
 * @method  $this                           setName(string $name)
 * @method  PaymentInfo                     getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|PaymentInfo $paymentInfo)
 * @method  bool                            getPremium()                        Indicates whether the shop is premium or not
 * @method  $this                           setPremium(bool $flag)
 * @method  bool                            isPremium()
 * @method  bool                            getProfessional()                   Indicates whether the shop is professional or not
 * @method  $this                           setProfessional(bool $flag)
 * @method  bool                            isProfessional()
 * @method  ProfessionalInfo                getProfessionalInfo()
 * @method  $this                           setProfessionalInfo(array|ProfessionalInfo $professionalInfo)
 * @method  string                          getReturnPolicy()
 * @method  $this                           setReturnPolicy(string $policy)     Short text indicating the terms of restitution of a product to the shop
 * @method  ShippingInfo                    getShippingInfo()
 * @method  $this                           setShippingInfo(array|ShippingInfo $shippingInfo)
 * @method  ShopStats                       getShopStats()
 * @method  $this                           setShopStats(array|ShopStats $shopStats)
 * @method  string                          getState()
 * @method  $this                           setState(string $state)
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
        'shop_stats'              => [ShopStats::class, 'create'],
    ];
}