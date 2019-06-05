<?php
namespace Mirakl\Core\Response\Decorator;

use Psr\Http\Message\ResponseInterface;

class CsvCollection extends CsvArray
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @param   string  $class
     */
    public function __construct($class = \Mirakl\Core\Domain\Collection\MiraklCollection::class)
    {
        $this->class = $class;
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        $data = parent::decorate($response);

        return new $this->class($data);
    }
}