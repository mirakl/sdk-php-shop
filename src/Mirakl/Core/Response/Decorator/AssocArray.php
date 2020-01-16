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
        if (strpos($response->getHeaderLine('Content-Type'), 'application/xml') === 0) {
            return \Mirakl\parse_xml_response($response);
        }

        return \Mirakl\parse_json_response($response);
    }
}