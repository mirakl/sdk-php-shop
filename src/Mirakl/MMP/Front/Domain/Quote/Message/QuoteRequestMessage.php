<?php
namespace Mirakl\MMP\Front\Domain\Quote\Message;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Message\QuoteRequestDocumentCollection;

/**
 * @method  string                          getBody()
 * @method  $this                           setBody(string $body)
 * @method  \DateTime                       getDateCreated()
 * @method  $this                           setDateCreated(\DateTime $dateCreated)
 * @method  QuoteRequestDocumentCollection  getDocuments()
 * @method  $this                           setDocuments(array|QuoteRequestDocumentCollection $documents)
 * @method  string                          getFrom()
 * @method  $this                           setFrom(string $from)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  string                          getTo()
 * @method  $this                           setTo(string $to)
 */
class QuoteRequestMessage extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [QuoteRequestDocumentCollection::class, 'create'],
    ];
}