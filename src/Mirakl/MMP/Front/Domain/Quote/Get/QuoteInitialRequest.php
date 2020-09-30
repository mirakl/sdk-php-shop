<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteLineCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Message\QuoteRequestDocumentCollection;

/**
 * @method  string                          getBody()
 * @method  $this                           setBody(string $body)
 * @method  QuoteRequestDocumentCollection  getDocuments()
 * @method  $this                           setDocuments(array|QuoteRequestDocumentCollection $documents)
 * @method  QuoteLineCollection             getLines()
 * @method  $this                           setLines(array|QuoteLineCollection $lines)
 * @method  string                          getMessageId()
 * @method  $this                           setMessageId(string $messageId)
 * @method  string                          getSubject()
 * @method  $this                           setSubject(string $subject)
 */
class QuoteInitialRequest extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [QuoteRequestDocumentCollection::class, 'create'],
        'lines'     => [QuoteLineCollection::class, 'create'],
    ];
}