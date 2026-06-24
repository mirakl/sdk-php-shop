<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop;

use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\ProducerIdentifierCollection;
use Mirakl\MMP\Common\Domain\Collection\Shop\ShopApplicableTaxCollection;
use Mirakl\MMP\Common\Domain\Shop\AbstractShop;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\Common\Domain\Shop\BillingInfo;
use Mirakl\MMP\Common\Domain\Shop\ContactInfo;
use Mirakl\MMP\Common\Domain\Shop\ProfessionalInfo;
use Mirakl\MMP\Common\Domain\Shop\ShippingInfo;
use Mirakl\MMP\Common\Domain\Shop\ShopKyc;
use Mirakl\MMP\Shop\Domain\Collection\Shop\Billing\SpecificBillingInformationCollection;
use Mirakl\MMP\Shop\Domain\Shop\Billing\DefaultBillingInformation;

/**
 * @method DefaultBillingInformation            getDefaultBillingInformation()
 * @method $this                                setDefaultBillingInformation(array|DefaultBillingInformation $defaultBillingInformation)
 * @method Dropship                             getDropship()
 * @method $this                                setDropship(array|Dropship $dropship)
 * @method ShopPaymentDetails                   getPaymentDetails()
 * @method $this                                setPaymentDetails(array|ShopPaymentDetails $paymentDetails)
 * @method ShopShipping                         getShipping()
 * @method $this                                setShipping(array|ShopShipping $shipping)
 * @method array                                getShippingTypes()
 * @method $this                                setShippingTypes(array $shippingTypes)
 * @method array                                getShippingZones()
 * @method $this                                setShippingZones(array $shippingZones)
 * @method SpecificBillingInformationCollection getSpecificBillingInformations()
 * @method $this                                setSpecificBillingInformations(array|SpecificBillingInformationCollection $specificBillingInformations)
 */
class ShopAccount extends AbstractShop
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_field_values'       => [AdditionalFieldValueCollection::class, 'create'],
        'applicable_taxes'              => [ShopApplicableTaxCollection::class, 'create'],
        'billing_info'                  => [BillingInfo::class, 'create'],
        'contact_info'                  => [ContactInfo::class, 'create'],
        'default_billing_information'   => [DefaultBillingInformation::class, 'create'],
        'dropship'                      => [Dropship::class, 'create'],
        'kyc'                           => [ShopKyc::class, 'create'],
        'payment_details'               => [ShopPaymentDetails::class, 'create'],
        'payment_info'                  => [PaymentInfo::class, 'create'],
        'producer_identifiers'          => [ProducerIdentifierCollection::class, 'create'],
        'professional_info'             => [ProfessionalInfo::class, 'create'],
        'shipping'                      => [ShopShipping::class, 'create'],
        'shipping_info'                 => [ShippingInfo::class, 'create'],
        'specific_billing_informations' => [SpecificBillingInformationCollection::class, 'create'],
    ];
}
