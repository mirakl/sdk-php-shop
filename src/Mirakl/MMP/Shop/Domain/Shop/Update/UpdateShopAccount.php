<?php
namespace Mirakl\MMP\Shop\Domain\Shop\Update;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;

/**
 * @method  UpdateShopAccountAddress        getAddress()
 * @method  $this                           setAddress(UpdateShopAccountAddress|array $address)
 * @method  string[]                        getChannels()
 * @method  $this                           setChannels(string[] $channels)
 * @method  \DateTime                       getClosedFrom()
 * @method  $this                           setClosedFrom(\DateTime $closedFrom)
 * @method  \DateTime                       getClosedTo()
 * @method  $this                           setClosedTo(\DateTime $closedTo)
 * @method  string                          getDescription()
 * @method  $this                           setDescription(string $description)
 * @method  string                          getEmail()
 * @method  $this                           setEmail(string $email)
 * @method  string                          getFax()
 * @method  $this                           setFax(string $fax)
 * @method  PaymentInfo                     getPaymentInfo()
 * @method  $this                           setPaymentInfo(PaymentInfo|array $paymentInfo)
 * @method  bool                            getIsProfessional()
 * @method  $this                           setIsProfessional(bool $flag)
 * @method  UpdateShopAccountProDetails     getProDetails()
 * @method  $this                           setProDetails(UpdateShopAccountProDetails|array $proDetails)
 * @method  string                          getReturnPolicy()
 * @method  $this                           setReturnPolicy(string $returnPolicy)
 * @method  string                          getShippingCountry()
 * @method  $this                           setShippingCountry(string $country)
 * @method  AdditionalFieldValueCollection  getShopAdditionalFields()
 * @method  $this                           setShopAdditionalFields(array|AdditionalFieldValueCollection $shopAdditionalFields)
 * @method  string                          getShopName()
 * @method  $this                           setShopName(string $shopName)
 * @method  string                          getWebSite()
 * @method  $this                           setWebSite(string $webSite)
 */
class UpdateShopAccount extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'                => [UpdateShopAccountAddress::class, 'create'],
        'pro_details'            => [UpdateShopAccountProDetails::class, 'create'],
        'payment_info'           => [PaymentInfo::class, 'factory'],
        'shop_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
    ];
}