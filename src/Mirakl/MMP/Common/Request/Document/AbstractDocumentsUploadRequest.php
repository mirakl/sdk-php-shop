<?php
namespace Mirakl\MMP\Common\Request\Document;

use Mirakl\Core\Domain\Collection\DocumentCollection;
use Mirakl\Core\Domain\Document;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Document\DocumentsUploadResult;

/**
 * @method  bool                hasDocuments()
 * @method  DocumentCollection  getDocuments()
 * @method  $this               setDocuments(array|DocumentCollection $documents)
 */
abstract class AbstractDocumentsUploadRequest extends AbstractRequest
{
    const FILES_PARAM = 'files';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [DocumentCollection::class, 'create'],
    ];

    /**
     * @param   DocumentCollection  $documents
     */
    public function __construct(DocumentCollection $documents = null)
    {
        parent::__construct();
        if (null !== $documents) {
            $this->setDocuments($documents);
        }
    }

    /**
     * Formats documents upload details when uploading documents
     *
     * @param   string  $listName
     * @param   string  $itemName
     * @return  \SimpleXMLElement
     */
    protected function formatUploadDetails($listName = 'documents', $itemName = 'document')
    {
        $xml = new \SimpleXMLElement('<body/>');
        $children = $xml->addChild($listName);

        $docs = $this->getDocuments();
        /** @var Document $doc */
        foreach ($docs as $doc) {
            $child = $children->addChild($itemName);
            $child->addChild('file_name', $doc->getDocumentName());
            $child->addChild('type_code', $doc->getDocumentType());
        }

        return $xml;
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();

        if ($this->getDocuments()) {
            $params[static::FILES_PARAM] = $this->getDocuments();
        }

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return DocumentsUploadResult::decorator();
    }
}