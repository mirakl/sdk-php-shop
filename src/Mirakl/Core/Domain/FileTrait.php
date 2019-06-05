<?php
namespace Mirakl\Core\Domain;

trait FileTrait
{
    use MimeTypesTrait;

    /**
     * @var string
     */
    protected $contentType = 'application/octet-stream';

    /**
     * @var \SplFileObject
     */
    protected $file;

    /**
     * @var string
     */
    protected $fileName;

    /**
     * @var string
     */
    protected $fileExtension;

    /**
     * @return  string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return  \SplFileObject
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return  string
     */
    public function getFileName()
    {
        return $this->fileName ?: $this->file->getFilename();
    }

    /**
     * @param   string|null $contentType
     * @return  $this
     */
    public function setContentType($contentType = null)
    {
        $this->contentType = $contentType ?: 'application/octet-stream';

        return $this;
    }

    /**
     * @param   mixed   $file
     * @return  $this
     */
    public function setFile($file)
    {
        $this->file = \Mirakl\create_file($file);

        return $this;
    }

    /**
     * One of csv, json, xml, pdf, zip, ...
     * @see MimeTypesTrait::$mimeTypes
     *
     * @param   string  $extension
     * @param   bool    $updateContentType
     * @return  $this
     */
    public function setFileExtension($extension, $updateContentType = true)
    {
        $this->fileExtension = isset(static::$mimeTypes[$extension]) ? $extension : null;

        if ($updateContentType) {
            $this->setContentType($this->fileExtension);
        }

        return $this;
    }

    /**
     * @param   string  $fileName
     * @return  $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = str_replace('"', '_', $fileName);

        return $this;
    }
}