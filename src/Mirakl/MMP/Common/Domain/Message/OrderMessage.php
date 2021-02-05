<?php
namespace Mirakl\MMP\Common\Domain\Message;
use Mirakl\MMP\Common\Domain\Collection\Message\MessageDocumentCollection;

/**
 * @method  string                      getCommercialId()
 * @method  $this                       setCommercialId(string $commercialId)
 * @method  MessageDocumentCollection   getDocuments()
 * @method  string                      getOrderId()
 * @method  $this                       setOrderId(string $orderId)
 */
class OrderMessage extends AbstractMessage
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [MessageDocumentCollection::class, 'create'],
    ];
}