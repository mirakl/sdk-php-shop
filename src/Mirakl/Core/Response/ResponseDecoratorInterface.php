<?php
namespace Mirakl\Core\Response;

use Psr\Http\Message\ResponseInterface;

interface ResponseDecoratorInterface
{
    /**
     * @param   ResponseInterface   $response
     * @return  mixed
     */
    public function decorate(ResponseInterface $response);
}