<?php
namespace Mirakl\Core\Request;

use Mirakl\Core\Domain\FileTrait;
use Mirakl\Core\Domain\FileWrapper;

abstract class AbstractFileRequest extends AbstractRequest
{
    use FileTrait;

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var bool
     */
    protected $json = false;

    /**
     * @param   string|array|\SplFileObject $file
     */
    public function __construct($file)
    {
        parent::__construct();
        $this->setFile($file);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();
        if ($this->file) {
            $params['file'] = (new FileWrapper($this->file))
                ->setFileName($this->getFileName());
        }

        return $params;
    }
}