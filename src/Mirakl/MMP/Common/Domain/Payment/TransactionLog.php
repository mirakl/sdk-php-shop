<?php
namespace Mirakl\MMP\Common\Domain\Payment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Product\ProductInfo;

/**
 * @method  string      getAccountingDocumentNumber()
 * @method  $this       setAccountingDocumentNumber(string $number)
 * @method  \DateTime   getAccountingDocumentCreationDate()
 * @method  $this       setAccountingDocumentCreationDate(\DateTime $creationDate)
 * @method  float       getAmount()
 * @method  $this       setAmount(float $price)
 * @method  float       getAmountCredited()
 * @method  $this       setAmountCredited(float $price)
 * @method  float       getAmountDebited()
 * @method  $this       setAmountDebited(float $price)
 * @method  float       getBalance()
 * @method  $this       setBalance(float $price)
 * @method  string      getCommissionGridLabel()
 * @method  $this       setCommissionGridLabel(string $label)
 * @method  string      getCurrencyIsoCode()
 * @method  $this       setCurrencyIsoCode(string $currencyCode)
 * @method  \DateTime   getDateCreated()
 * @method  $this       setDateCreated(\DateTime $dateCreated)
 * @method  string      getId()
 * @method  $this       setId(string $id)
 * @method  \DateTime   getLastUpdatedDate()
 * @method  $this       setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method  float       getOfferPriceUnit()
 * @method  $this       setOfferPriceUnit(float $price)
 * @method  string      getOfferSku()
 * @method  $this       setOfferSku(string $offerSku)
 * @method  string      getOfferState()
 * @method  $this       setOfferState(string $offerState)
 * @method  string      getOrderId()
 * @method  $this       setOrderId(string $orderId)
 * @method  string      getOrderCommercialId()
 * @method  $this       setOrderCommercialId(string $orderCommercialId)
 * @method  string      getOrderLineId()
 * @method  $this       setOrderLineId(string $orderLineId)
 * @method  string      getOrderState()
 * @method  $this       setOrderState(string $orderState)
 * @method  string      getOrderTaxCode()
 * @method  $this       setOrderTaxCode(string $orderTaxCode)
 * @method  string      getPaymentState()
 * @method  $this       setPaymentState(string $paymentState)
 * @method  string      getPaymentVoucherNumber()
 * @method  $this       setPaymentVoucherNumber(string $number)
 * @method  ProductInfo getProductInfo()
 * @method  $this       setProductInfo(array|ProductInfo $productInfo)
 * @method  int         getQuantity()
 * @method  $this       setQuantity(int $qty)
 * @method  string      getRefundId()
 * @method  $this       setRefundId(string $refundId)
 * @method  string      getShippingTypeCode()
 * @method  $this       setShippingTypeCode(string $code)
 * @method  string      getShippingZoneCode()
 * @method  $this       setShippingZoneCode(string $code)
 * @method  string      getShopId()
 * @method  $this       setShopId(string $shopId)
 * @method  string      getShopName()
 * @method  $this       setShopName(string $shopName)
 * @method  string      getShopOperatorInternalId()
 * @method  $this       setShopOperatorInternalId(string $id)
 * @method  float       getShopTaxRate()
 * @method  $this       setShopTaxRate(float $price)
 * @method  \DateTime   getTransactionDate()
 * @method  $this       setTransactionDate(\DateTime $transactionDate)
 * @method  string      getTransactionNumber()
 * @method  $this       setTransactionNumber(string $number)
 * @method  string      getTransactionType()
 * @method  $this       setTransactionType(string $type)
 */
class TransactionLog extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_sku'    => 'product_info/sku',
        'product_title'  => 'product_info/title',
        'category_code'  => 'product_info/category/code',
        'category_label' => 'product_info/category/label',
        'category_type'  => 'product_info/category/type',
        'last_updated'   => 'last_updated_date',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'product_info' => [ProductInfo::class, 'create'],
    ];
}