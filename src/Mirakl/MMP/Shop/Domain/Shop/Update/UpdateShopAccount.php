<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\ProducerIdentifierCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\Shop\Domain\Collection\Shop\Billing\SpecificBillingInformationCollection;
use Mirakl\MMP\Shop\Domain\Shop\Billing\DefaultBillingInformation;
use Mirakl\MMP\Shop\Domain\Shop\ShopShipping;

/**
 * @method UpdateShopAccountAddress             getAddress()
 * @method $this                                setAddress(UpdateShopAccountAddress|array $address)
 * @method string[]                             getChannels()
 * @method $this                                setChannels(string[] $channels)
 * @method \DateTime                            getClosedFrom()
 * @method $this                                setClosedFrom(\DateTime $closedFrom)
 * @method \DateTime                            getClosedTo()
 * @method $this                                setClosedTo(\DateTime $closedTo)
 * @method DefaultBillingInformation            getDefaultBillingInformation()
 * @method $this                                setDefaultBillingInformation(DefaultBillingInformation|array $defaultBillingInformation)
 * @method string                               getDescription()
 * @method $this                                setDescription(string $description)
 * @method string                               getEmail()
 * @method $this                                setEmail(string $email)
 * @method string                               getFax()
 * @method $this                                setFax(string $fax)
 * @method bool                                 getIsProfessional()
 * @method $this                                setIsProfessional(bool $isProfessional)
 * @method string                               getModel()
 * @method $this                                setModel(string $model)
 * @method PaymentInfo                          getPaymentInfo()
 * @method $this                                setPaymentInfo(PaymentInfo|array $paymentInfo)
 * @method bool                                 getPaymentMethodMandatory()
 * @method $this                                setPaymentMethodMandatory(bool $paymentMethodMandatory)
 * @method UpdateShopAccountProDetails          getProDetails()
 * @method $this                                setProDetails(UpdateShopAccountProDetails|array $proDetails)
 * @method ProducerIdentifierCollection         getProducerIdentifiers()
 * @method $this                                setProducerIdentifiers(ProducerIdentifierCollection|array $producerIdentifiers)
 * @method array                                getProducerIds() @deprecated Use getProducerIdentifiers() instead
 * @method $this                                setProducerIds(array $producerIds) @deprecated Use setProducerIdentifiers() instead
 * @method string                               getRecyclingPolicy()
 * @method $this                                setRecyclingPolicy(string $recyclingPolicy)
 * @method string                               getReturnPolicy()
 * @method $this                                setReturnPolicy(string $returnPolicy)
 * @method ShopShipping                         getShipping()
 * @method $this                                setShipping(ShopShipping|array $shipping)
 * @method string                               getShippingCountry()
 * @method $this                                setShippingCountry(string $shippingCountry)
 * @method AdditionalFieldValueCollection       getShopAdditionalFields()
 * @method $this                                setShopAdditionalFields(AdditionalFieldValueCollection|array $shopAdditionalFields)
 * @method string                               getShopName()
 * @method $this                                setShopName(string $shopName)
 * @method SpecificBillingInformationCollection getSpecificBillingInformations()
 * @method $this                                setSpecificBillingInformations(SpecificBillingInformationCollection|array $specificBillingInformations)
 * @method string                               getWebSite()
 * @method $this                                setWebSite(string $webSite)
 */
class UpdateShopAccount extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'                       => [UpdateShopAccountAddress::class, 'create'],
        'default_billing_information'   => [DefaultBillingInformation::class, 'create'],
        'payment_info'                  => [PaymentInfo::class, 'factory'],
        'pro_details'                   => [UpdateShopAccountProDetails::class, 'create'],
        'producer_identifiers'          => [ProducerIdentifierCollection::class, 'create'],
        'shipping'                      => [ShopShipping::class, 'create'],
        'shop_additional_fields'        => [AdditionalFieldValueCollection::class, 'create'],
        'specific_billing_informations' => [SpecificBillingInformationCollection::class, 'create'],
    ];
}
