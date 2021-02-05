<?php
namespace Mirakl\MMP\Common\Request\Document;

use Mirakl\Core\Domain\Collection\FileCollection;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\Core\Request\AbstractRequest;

/**
 * @method  bool            hasFiles()
 * @method  FileCollection  getFiles()
 * @method  $this           setFiles(FileWrapper[]|FileCollection $files)
 */
abstract class AbstractFilesUploadRequest extends AbstractRequest
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
        'files' => [FileCollection::class, 'create'],
    ];

    /**
     * @param   FileWrapper[]|FileCollection    $files
     */
    public function __construct($files = [])
    {
        parent::__construct();
        $this->setFiles($files);
    }

    /**
     * @param   mixed   $file
     * @return  FileCollection
     */
    public function addFile($file)
    {
        return $this->getFiles()->add($file);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();

        if ($this->getFiles()) {
            $params[static::FILES_PARAM] = $this->getFiles();
        }

        return $params;
    }
}