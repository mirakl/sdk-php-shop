<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class MiraklObject implements ResponseDecoratorInterface
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @param   string  $class
     */
    public function __construct($class = \Mirakl\Core\Domain\MiraklObject::class)
    {
        $this->class = $class;
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        $data = (new AssocArray())->decorate($response);

        return new $this->class($data);
    }
}