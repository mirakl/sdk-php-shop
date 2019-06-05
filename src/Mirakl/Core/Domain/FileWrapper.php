<?php
namespace Mirakl\Core\Domain;

class FileWrapper
{
    use DownloadableTrait;

    /**
     * string = file contents
     * array = CSV data
     *
     * @param   string|array|\SplFileObject $file
     */
    public function __construct($file)
    {
        $this->setFile($file);
    }
}