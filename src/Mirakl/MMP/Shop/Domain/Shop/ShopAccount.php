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
use Mirakl\MMP\Common\Domain\Shop\MediaInfo;
use Mirakl\MMP\Common\Domain\Shop\ProfessionalInfo;
use Mirakl\MMP\Common\Domain\Shop\ShippingInfo;
use Mirakl\MMP\Common\Domain\Shop\ShopKyc;
use Mirakl\MMP\Common\Domain\Shop\ShopStats;
use Mirakl\MMP\Shop\Domain\Collection\Shop\Billing\SpecificBillingInformationCollection;
use Mirakl\MMP\Shop\Domain\Shop\Billing\DefaultBillingInformation;

/**
 * @method DefaultBillingInformation            getDefaultBillingInformation()
 * @method $this                                setDefaultBillingInformation(DefaultBillingInformation|array $defaultBillingInformation)
 * @method ShopPaymentDetails                   getPaymentDetails()
 * @method $this                                setPaymentDetails(ShopPaymentDetails|array $paymentDetails)
 * @method ShopShipping                         getShipping()
 * @method $this                                setShipping(ShopShipping|array $shipping)
 * @method SpecificBillingInformationCollection getSpecificBillingInformations()
 * @method $this                                setSpecificBillingInformations(SpecificBillingInformationCollection|array $specificBillingInformations)
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
        'kyc'                           => [ShopKyc::class, 'create'],
        'media_info'                    => [MediaInfo::class, 'create'],
        'payment_details'               => [ShopPaymentDetails::class, 'create'],
        'payment_info'                  => [PaymentInfo::class, 'create'],
        'producer_identifiers'          => [ProducerIdentifierCollection::class, 'create'],
        'professional_info'             => [ProfessionalInfo::class, 'create'],
        'shipping'                      => [ShopShipping::class, 'create'],
        'shipping_info'                 => [ShippingInfo::class, 'create'],
        'shop_stats'                    => [ShopStats::class, 'create'],
        'specific_billing_informations' => [SpecificBillingInformationCollection::class, 'create'],
    ];
}
