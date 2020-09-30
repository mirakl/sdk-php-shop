<?php
namespace Mirakl\MMP\Front\Domain\Quote\Message;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Message\QuoteRequestDocumentCollection;

/**
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  QuoteRequestDocumentCollection  getDocuments()
 * @method  $this                           setDocuments(array|QuoteRequestDocumentCollection $documents)
 */
class CreatedQuoteRequestMessage extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [QuoteRequestDocumentCollection::class, 'create'],
    ];
}