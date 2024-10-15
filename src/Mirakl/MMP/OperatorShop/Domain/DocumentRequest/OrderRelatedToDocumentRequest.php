<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string          getId()
 * @method $this           setId(string $id)
 * @method string          getCommercialId()
 * @method $this           setCommercialId(string $commercialId)
 * @method string          getReferenceForCustomer()
 * @method $this           setReferenceForCustomer(string $referenceForCustomer)
 * @method string          getReferenceForSeller()
 * @method $this           setReferenceForSeller(string $referenceForSeller)
 * @method TransactionInfo getTransactionInfo()
 * @method $this           setTransactionInfo(TransactionInfo|array $transactionInfo)
 */
class OrderRelatedToDocumentRequest extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'transaction_info' => [TransactionInfo::class, 'create'],
    ];
}
