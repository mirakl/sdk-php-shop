<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\InvoiceDetails\DocumentDetailsCollection;
use Mirakl\MMP\Common\Domain\Order\InvoiceDetails\PaymentTerms;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\AggregatedTaxCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\DocumentRequestLineResponseCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\InitialDocumentCollection;

/**
 * @method string                                getCurrencyIsoCode()
 * @method $this                                 setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                             getDateCreated()
 * @method $this                                 setDateCreated(\DateTime $dateCreated)
 * @method DocumentDetailsCollection             getDocumentDetails()
 * @method $this                                 setDocumentDetails(array|DocumentDetailsCollection $documentDetails)
 * @method string                                getDocumentNumber()
 * @method $this                                 setDocumentNumber(string $documentNumber)
 * @method \DateTime                             getDueDate()
 * @method $this                                 setDueDate(\DateTime $dueDate)
 * @method DocumentRequestEntities               getEntities()
 * @method $this                                 setEntities(array|DocumentRequestEntities $entities)
 * @method string                                getEntityId()
 * @method $this                                 setEntityId(string $entityId)
 * @method string                                getEntityType()
 * @method $this                                 setEntityType(string $entityType)
 * @method string                                getId()
 * @method $this                                 setId(string $id)
 * @method InitialDocumentCollection             getInitialDocuments()
 * @method $this                                 setInitialDocuments(array|InitialDocumentCollection $initialDocuments)
 * @method string                                getInitialPaymentState()
 * @method $this                                 setInitialPaymentState(string $initialPaymentState)
 * @method PaymentTerms                          getInitialPaymentTerms()
 * @method $this                                 setInitialPaymentTerms(array|PaymentTerms $initialPaymentTerms)
 * @method \DateTime                             getIssueDate()
 * @method $this                                 setIssueDate(\DateTime $issueDate)
 * @method Issuer                                getIssuer()
 * @method $this                                 setIssuer(array|Issuer $issuer)
 * @method \DateTime                             getLastUpdated()
 * @method $this                                 setLastUpdated(\DateTime $lastUpdated)
 * @method DocumentRequestLineResponseCollection getLines() @deprecated Please use DR12 to get lines instead.
 * @method $this                                 setLines(array|DocumentRequestLineResponseCollection $lines)
 * @method Payment                               getPayment()
 * @method $this                                 setPayment(array|Payment $payment)
 * @method PaymentDestination                    getPaymentDestination()
 * @method $this                                 setPaymentDestination(array|PaymentDestination $paymentDestination)
 * @method PaymentTerms                          getPaymentTerms()
 * @method $this                                 setPaymentTerms(array|PaymentTerms $paymentTerms)
 * @method Recipient                             getRecipient()
 * @method $this                                 setRecipient(array|Recipient $recipient)
 * @method string                                getState()
 * @method $this                                 setState(string $state)
 * @method AggregatedTaxCollection               getTaxes()
 * @method $this                                 setTaxes(array|AggregatedTaxCollection $taxes)
 * @method float                                 getTotalAmountExcludingTaxes()
 * @method $this                                 setTotalAmountExcludingTaxes(float $totalAmountExcludingTaxes)
 * @method float                                 getTotalAmountIncludingTaxes()
 * @method $this                                 setTotalAmountIncludingTaxes(float $totalAmountIncludingTaxes)
 * @method float                                 getTotalTaxAmount()
 * @method $this                                 setTotalTaxAmount(float $totalTaxAmount)
 * @method string                                getType()
 * @method $this                                 setType(string $type)
 */
class AccountingDocumentRequestResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'document_details'    => [DocumentDetailsCollection::class, 'create'],
        'entities'            => [DocumentRequestEntities::class, 'create'],
        'initial_documents'   => [InitialDocumentCollection::class, 'create'],
        'issuer'              => [Issuer::class, 'create'],
        'lines'               => [DocumentRequestLineResponseCollection::class, 'create'],
        'payment'             => [Payment::class, 'create'],
        'payment_destination' => [PaymentDestination::class, 'create'],
        'payment_terms'       => [PaymentTerms::class, 'create'],
        'recipient'           => [Recipient::class, 'create'],
        'taxes'               => [AggregatedTaxCollection::class, 'create'],
    ];
}
