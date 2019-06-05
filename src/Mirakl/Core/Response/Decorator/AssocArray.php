<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class AssocArray implements ResponseDecoratorInterface
{
    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        return \Mirakl\parse_json_response($response);
    }
}