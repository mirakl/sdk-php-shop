<?php
namespace Mirakl\Core\Client;

use Mirakl\Core\Request\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ApiClientInterface
{
    /**
     * Runs specified request against current API
     *
     * @param   RequestInterface    $request
     * @return  ResponseInterface
     */
    public function run(RequestInterface $request);
}