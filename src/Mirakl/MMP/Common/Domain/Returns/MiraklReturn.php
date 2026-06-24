<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnDocumentCollection;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnLineCollection;

/**
 * @method string                   getId()
 * @method $this                    setId(string $id)
 * @method string                   getOrderCommercialId()
 * @method $this                    setOrderCommercialId(string $orderCommercialId)
 * @method string                   getOrderId()
 * @method $this                    setOrderId(string $orderId)
 * @method \DateTime                getDateCreated()
 * @method $this                    setDateCreated(\DateTime $dateCreated)
 * @method \DateTime                getLastUpdated()
 * @method $this                    setLastUpdated(\DateTime $lastUpdated)
 * @method ReturnLineCollection     getReturnLines()
 * @method $this                    setReturnLines(array|ReturnLineCollection $returnLines)
 * @method string                   getReasonCode()
 * @method $this                    setReasonCode(string $reasonCode)
 * @method string                   getLabelUrl()
 * @method $this                    setLabelUrl(string $labelUrl)
 * @method string                   getDescription()
 * @method $this                    setDescription(string $description)
 * @method string                   getMethodCode()
 * @method $this                    setMethodCode(string $methodCode)
 * @method string                   getState()
 * @method $this                    setState(string $state)
 * @method string                   getRejectionReasonCode()
 * @method $this                    setRejectionReasonCode(string $rejectionReasonCode)
 * @method ReturnAddress            getReturnAddress()
 * @method $this                    setReturnAddress(ReturnAddress $returnAddress)
 * @method ReturnTracking           getTracking()
 * @method $this                    setTracking(ReturnTracking $tracking)
 * @method ReturnDocumentCollection getDocuments()
 * @method $this                    setDocuments(array|ReturnDocumentCollection $documents)
 * @method string                   getRma()
 * @method $this                    setRma(string $rma)
 */
class MiraklReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_lines'   => [ReturnLineCollection::class, 'create'],
        'return_address' => [ReturnAddress::class, 'create'],
        'tracking'       => [ReturnTracking::class, 'create'],
        'documents'      => [ReturnDocumentCollection::class, 'create'],
    ];
}
