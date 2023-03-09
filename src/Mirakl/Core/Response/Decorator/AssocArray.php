<?php
namespace Mirakl\Core\Response\Decorator;

use function Mirakl\ {
    parse_json_response,
    parse_xml_response,
    remove_null_values
};
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
            $data = parse_xml_response($response);
        } else {
            $data = parse_json_response($response);
        }

        return remove_null_values($data);
    }
}