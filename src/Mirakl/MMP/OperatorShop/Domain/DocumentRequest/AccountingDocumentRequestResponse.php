<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\InvoiceDetails\DocumentDetailsCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\DocumentRequestLineResponseCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\InitialDocumentCollection;

/**
 * @method string                                getId()
 * @method $this                                 setId(string $id)
 * @method DocumentRequestEntities               getEntities()
 * @method $this                                 setEntities(DocumentRequestEntities|array $entities)
 * @method string                                getEntityType()
 * @method $this                                 setEntityType(string $entityType)
 * @method string                                getEntityId()
 * @method $this                                 setEntityId(string $entityId)
 * @method string                                getDocumentNumber()
 * @method $this                                 setDocumentNumber(string $documentNumber)
 * @method string                                getState()
 * @method $this                                 setState(string $state)
 * @method string                                getInitialPaymentState()
 * @method $this                                 setInitialPaymentState(string $initialPaymentState)
 * @method float                                 getTotalAmountIncludingTaxes()
 * @method $this                                 setTotalAmountIncludingTaxes(float $totalAmountIncludingTaxes)
 * @method float                                 getTotalAmountExcludingTaxes()
 * @method $this                                 setTotalAmountExcludingTaxes(float $totalAmountExcludingTaxes)
 * @method float                                 getTotalTaxAmount()
 * @method $this                                 setTotalTaxAmount(float $totalTaxAmount)
 * @method string                                getType()
 * @method $this                                 setType(string $type)
 * @method string                                getCurrencyIsoCode()
 * @method $this                                 setCurrencyIsoCode(string $currencyIsoCode)
 * @method DocumentDetailsCollection             getDocumentDetails()
 * @method $this                                 setDocumentDetails(DocumentDetailsCollection|array $documentDetails)
 * @method \DateTime                             getDateCreated()
 * @method $this                                 setDateCreated(\DateTime $dateCreated)
 * @method \DateTime                             getLastUpdated()
 * @method $this                                 setLastUpdated(\DateTime $lastUpDated)
 * @method \DateTime                             getIssueDate()
 * @method $this                                 setIssueDate(\DateTime $issueDate)
 * @method \DateTime                             getDueDate()
 * @method $this                                 setDueDate(\DateTime $dueDate)
 * @method PaymentDestination                    getPaymentDestination()
 * @method $this                                 setPaymentDestination(PaymentDestination|array $paymentDestination)
 * @method Issuer                                getIssuer()
 * @method $this                                 setIssuer(Issuer|array $issuer)
 * @method Recipient                             getRecipient()
 * @method $this                                 setRecipient(Recipient|array $recipient)
 * @method DocumentRequestLineResponseCollection getLines()
 * @method $this                                 setLines(DocumentRequestLineResponseCollection|array $lines)
 * @method InitialDocumentCollection             getInitialDocuments()
 * @method $this                                 setInitialDocuments(InitialDocumentCollection|array $initialDocuments)
 */
class AccountingDocumentRequestResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'document_details'    => [DocumentDetailsCollection::class, 'create'],
        'payment_destination' => [PaymentDestination::class, 'create'],
        'issuer'              => [Issuer::class, 'create'],
        'recipient'           => [Recipient::class, 'create'],
        'lines'               => [DocumentRequestLineResponseCollection::class, 'create'],
        'initial_documents'   => [InitialDocumentCollection::class, 'create'],
        'entities'            => [DocumentRequestEntities::class, 'create'],
    ];
}