<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class File implements ResponseDecoratorInterface
{
    /**
     * @var string
     */
    protected $extension;

    /**
     * @param   string  $extension
     */
    public function __construct($extension = 'txt')
    {
        $this->setExtension($extension);
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        return \Mirakl\parse_file_response($response, $this->extension);
    }

    /**
     * @return  string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param   string  $extension
     * @return  $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }
}