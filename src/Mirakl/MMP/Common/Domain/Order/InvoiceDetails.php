<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\InvoiceDetails\DocumentDetailsCollection;
use Mirakl\MMP\Common\Domain\Order\InvoiceDetails\PaymentTerms;

/**
 * @method DocumentDetailsCollection getDocumentDetails()
 * @method $this                     setDocumentDetails(DocumentDetailsCollection|array $documentDetails)
 * @method PaymentTerms              getPaymentTerms()
 * @method $this                     setPaymentTerms(PaymentTerms|array $paymentTerms)
 */
class InvoiceDetails extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'document_details' => [DocumentDetailsCollection::class, 'create'],
        'payment_terms'    => [PaymentTerms::class, 'create'],
    ];
}
