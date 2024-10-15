<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Shop\Bank\PaymentInfo;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceDetailedItemCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceTaxCollection;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceAddress;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoicePayment;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceSummary;
use Mirakl\MMP\OperatorShop\Domain\Invoice\InvoiceUser;

/**
 * @method InvoiceDetailedItemCollection getAccountingDocumentsItems()
 * @method $this                         setAccountingDocumentsItems(InvoiceDetailedItemCollection|array $accountingDocumentsItems)
 * @method string                        getCurrencyIsoCode()
 * @method $this                         setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                     getDateCreated()
 * @method $this                         setDateCreated(\DateTime $dateCreated)
 * @method \DateTime                     getDueDate()
 * @method $this                         setDueDate(\DateTime $dueDate)
 * @method \DateTime                     getEmissionDate() @deprecated Use operation date in invoice details instead.
 * @method $this                         setEmissionDate(\DateTime $emissionDate) @deprecated Use operation date in invoice details instead.
 * @method \DateTime                     getEndDate()
 * @method $this                         setEndDate(\DateTime $endDate)
 * @method string                        getId()
 * @method $this                         setId(string $id)
 * @method int                           getInvoiceId()
 * @method $this                         setInvoiceId(int $invoiceId)
 * @method \DateTime                     getIssueDate()
 * @method $this                         setIssueDate(\DateTime $issueDate)
 * @method InvoiceUser                   getIssuingUser()
 * @method $this                         setIssuingUser(InvoiceUser|array $issuingUser)
 * @method InvoicePayment                getPayment()
 * @method $this                         setPayment(InvoicePayment|array $payment)
 * @method PaymentInfo                   getPaymentInfo()
 * @method $this                         setPaymentInfo(PaymentInfo|array $paymentInfo)
 * @method string                        getPaymentVoucherNumber()
 * @method $this                         setPaymentVoucherNumber(string $paymentVoucherNumber)
 * @method string                        getPspName()
 * @method $this                         setPspName(string $pspName)
 * @method InvoiceAddress                getShopAddress()
 * @method $this                         setShopAddress(InvoiceAddress|array $shopAddress)
 * @method string                        getShopCorporateName()
 * @method $this                         setShopCorporateName(string $shopCorporateName)
 * @method int                           getShopId()
 * @method $this                         setShopId(int $shopId)
 * @method string                        getShopModel()
 * @method $this                         setShopModel(string $shopModel)
 * @method string                        getShopName()
 * @method $this                         setShopName(string $shopName)
 * @method string                        getShopTaxNumber()
 * @method $this                         setShopTaxNumber(string $shopTaxNumber)
 * @method \DateTime                     getStartDate()
 * @method $this                         setStartDate(\DateTime $startDate)
 * @method string                        getState()
 * @method $this                         setState(string $state)
 * @method InvoiceSummary                getSummary()
 * @method $this                         setSummary(InvoiceSummary|array $summary)
 * @method float                         getTotalAmountExclTaxes()
 * @method $this                         setTotalAmountExclTaxes(float $totalAmountExclTaxes)
 * @method float                         getTotalAmountInclTaxes()
 * @method $this                         setTotalAmountInclTaxes(float $totalAmountInclTaxes)
 * @method float                         getTotalChargedAmount()
 * @method $this                         setTotalChargedAmount(float $totalChargedAmount)
 * @method InvoiceTaxCollection          getTotalTaxes()
 * @method $this                         setTotalTaxes(InvoiceTaxCollection|array $totalTaxes)
 * @method string                        getType()
 * @method $this                         setType(string $type)
 */
class Invoice extends MiraklObject
{
    use DateRangeTrait;

    public const STATE_DRAFT     = 'DRAFT';
    public const STATE_GENERATED = 'GENERATED';
    public const STATE_COMPLETE  = 'COMPLETE';

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
        'issuing_user'               => [InvoiceUser::class, 'create'],
    ];
}
