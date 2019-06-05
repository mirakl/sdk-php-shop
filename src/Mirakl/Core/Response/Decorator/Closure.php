<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class Closure implements ResponseDecoratorInterface
{
    /**
     * @var \Closure
     */
    protected $closure;

    /**
     * @param   \Closure    $closure
     */
    public function __construct(\Closure $closure)
    {
        $this->closure = $closure;
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        return call_user_func_array($this->closure, [$response]);
    }
}