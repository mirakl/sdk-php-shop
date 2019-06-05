<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class ArrayValue implements ResponseDecoratorInterface
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @param   string  $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        return (new AssocArray())->decorate($response)[$this->key];
    }
}