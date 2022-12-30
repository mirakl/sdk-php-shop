<?php
namespace Mirakl\MMP\OperatorShop\Request\DocumentRequest;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\AccountingDocumentRequestResponseCollection;

/**
 * (DR11) Get order-related accounting documents requests
 *
 * Sort by creation date (desc by default)
 * This API uses pagination by default and will return 50 documents requests
 *
 * @method string    getId()
 * @method $this     setId(string $id)
 * @method string    getDocumentNumber()
 * @method $this     setDocumentNumber(string $documentNumber)
 * @method \DateTime getDateCreatedFrom()
 * @method $this     setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method \DateTime getDateCreatedTo()
 * @method $this     setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method \DateTime getLastUpdatedTo()
 * @method $this     setLastUpdatedTo(\DateTime $lastUpdatedTo)
 * @method \DateTime getIssueDateFrom()
 * @method $this     setIssueDateFrom(\DateTime $issueDateFrom)
 * @method \DateTime getIssueDateTo()
 * @method $this     setIssueDateTo(\DateTime $issueDateTo)
 * @method string[]  getStates()
 * @method $this     setStates(string[] $states)
 * @method string[]  getTypes()
 * @method $this     setTypes(string[] $types)
 * @method string[]  getIssuerTypes()
 * @method $this     setIssuerTypes(string[] $issuerTypes)
 * @method string[]  getEntityIds()
 * @method $this     setEntityIds(string[] $entityIds)
 * @method string[]  getEntityTypes()
 * @method $this     setEntityTypes(string[] $entityTypes)
 * @method \DateTime getBillingCycleFrom()
 * @method $this     setBillingCycleFrom(\DateTime $billingCycleFrom)
 * @method \DateTime getBillingCycleTo()
 * @method $this     setBillingCycleTo(\DateTime $billingCycleTo)
 */
abstract class AbstractGetAccountingDocumentsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/document-request/requests';

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'state',
        'type',
        'issuer_type',
        'entity_id',
        'entity_type',
    ];

    /**
     * @var array
     */
    public $queryParams = [
        'id',
        'document_number',
        'date_created_from',
        'date_created_to',
        'last_updated_from',
        'last_updated_to',
        'issue_date_from',
        'issue_date_to',
        'states'       => 'state',       // One or more among: STAGING, TO_PROCESS, ISSUED
        'types'        => 'type',        // One or more among: INVOICE, CREDIT_NOTE
        'issuer_types' => 'issuer_type', // One or more among: OPERATOR, SHOP
        'entity_ids'   => 'entity_id',   // The entity_type must be specified to use this filter, otherwise an error 400 will be returned.
                                         // Example: entity_id=order1-A&entity_id=order20-A&entity_type=PRODUCT_LOGISTIC_ORDER
        'entity_types' => 'entity_type', // One or more among: PRODUCT_LOGISTIC_ORDER, SHOP_BILLING_CYCLE_PURCHASE_ORDER
        'billing_cycle_from',            // This filter is only available for documents requests of the type: SHOP_BILLING_CYCLE_PURCHASE_ORDER
        'billing_cycle_to',              // This filter is only available for documents requests of the type: SHOP_BILLING_CYCLE_PURCHASE_ORDER
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(AccountingDocumentRequestResponseCollection::class, 'data');
    }
}