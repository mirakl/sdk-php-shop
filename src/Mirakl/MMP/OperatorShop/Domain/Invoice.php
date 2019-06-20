<?php
namespace Mirakl\MMP\OperatorShop\Domain;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceDetailedItemCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceTaxCollection;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceAddress;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoicePayment;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceSummary;

/**
 * @method  InvoiceDetailedItemCollection   getAccountingDocumentsItems()
 * @method  $this                           setAccountingDocumentsItems(array|InvoiceDetailedItemCollection $accountingDocumentsItems)
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyIsoCode)
 * @method  \DateTime                       getDateCreated()
 * @method  $this                           setDateCreated(\DateTime $dateCreated)
 * @method  \DateTime                       getEmissionDate()
 * @method  $this                           setEmissionDate(\DateTime $emissionDate)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  string                          getInvoiceId()
 * @method  $this                           setInvoiceId(string $invoiceId)
 * @method  InvoicePayment                  getPayment()
 * @method  $this                           setPayment(array|InvoicePayment $payment)
 * @method  PaymentInfo                     getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|PaymentInfo $paymentInfo)
 * @method  InvoiceAddress                  getShopAddress()
 * @method  $this                           setShopAddress(array|InvoiceAddress $shopAddress)
 * @method  string                          getShopCorporateName()
 * @method  $this                           setShopCorporateName(string $shopCorporateName)
 * @method  string                          getShopTaxNumber()
 * @method  $this                           setShopTaxNumber(string $shopTaxNumber)
 * @method  string                          getShopId()
 * @method  $this                           setShopId(string $shopId)
 * @method  string                          getShopName()
 * @method  $this                           setShopName(string $shopName)
 * @method  string                          getState()
 * @method  $this                           setState(string $state)
 * @method  InvoiceSummary                  getSummary()
 * @method  $this                           setSummary(array|InvoiceSummary $summary)
 * @method  float                           getTotalChargedAmount()
 * @method  $this                           setTotalChargedAmount(float $amount)
 * @method  float                           getTotalAmountExclTaxes()
 * @method  $this                           setTotalAmountExclTaxes(float $totalAmountExclTaxes)
 * @method  float                           getTotalAmountInclTaxes()
 * @method  $this                           setTotalAmountInclTaxes(float $totalAmountInclTaxes)
 * @method  InvoiceTaxCollection            getTotalTaxes()
 * @method  $this                           setTotalTaxes(array|InvoiceTaxCollection $totalTaxes)
 * @method  string                          getType()
 * @method  $this                           setType(string $type)
 */
class Invoice extends MiraklObject
{
    use DateRangeTrait;

    const STATE_DRAFT     = 'DRAFT';
    const STATE_GENERATED = 'GENERATED';
    const STATE_COMPLETE  = 'COMPLETE';

    /**
     * @var array
     */
    protected static $mapping = [
        'start_time' => 'start_date',
        'end_time'   => 'end_date',
        'details'    => 'accounting_documents_items',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'accounting_documents_items' => [InvoiceDetailedItemCollection::class, 'create'],
        'payment'                    => [InvoicePayment::class, 'create'],
        'payment_info'               => [PaymentInfo::class, 'factory'],
        'shop_address'               => [InvoiceAddress::class, 'create'],
        'summary'                    => [InvoiceSummary::class, 'create'],
        'total_taxes'                => [InvoiceTaxCollection::class, 'create'],
    ];
}