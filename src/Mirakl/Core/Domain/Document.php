<?php
namespace Mirakl\Core\Domain;

/**
 * @method  string  getDocumentName()
 * @method  $this   setDocumentName(string $documentName)
 * @method  string  getDocumentType()
 * @method  $this   setDocumentType(string $documentType)
 */
class Document extends FileWrapper
{
    use DataObjectTrait;

    /**
     * @param   mixed   $file
     * @param   string  $documentName
     * @param   string  $documentType
     */
    public function __construct($file, $documentName, $documentType)
    {
        parent::__construct($file);
        $this->setDocumentName($documentName);
        $this->setDocumentType($documentType);
    }
}