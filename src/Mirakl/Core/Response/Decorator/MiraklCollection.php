<?php
namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;
use Psr\Http\Message\ResponseInterface;

class MiraklCollection implements ResponseDecoratorInterface
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $key;

    /**
     * @param   string      $class
     * @param   string|null $key
     */
    public function __construct($class = \Mirakl\Core\Domain\Collection\MiraklCollection::class, $key = null)
    {
        $this->class = $class;
        $this->key = $key;
    }

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        $data = (new AssocArray())->decorate($response);

        $totalCount = null;
        if ($this->key) {
            if (isset($data['total_count'])) {
                $totalCount = $data['total_count'];
            }
            $data = $data[$this->key];
        }

        return new $this->class($data, $totalCount);
    }
}