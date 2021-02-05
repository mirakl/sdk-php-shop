<?php
namespace Mirakl\MMP\Common\Request\Document;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\FileTrait as FileResponseDecorator;

/**
 * @method  array       getDocumentIds()
 * @method  $this       setDocumentIds(array $documentIds)
 * @method  FileWrapper run(ApiClientInterface $api)
 */
abstract class AbstractDocumentsDownloadRequest extends AbstractRequest
{
    use FileResponseDecorator;

    /**
     * @var array
     */
    public $queryParams = ['document_ids'];
}