<?php
namespace Mirakl\Core\Response\Decorator;

use Psr\Http\Message\ResponseInterface;

class SeekableCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $previousPageToken;

    /**
     * @var string
     */
    protected $nextPageToken;

    /**
     * @inheritdoc
     */
    public function decorate(ResponseInterface $response)
    {
        $data = (new AssocArray())->decorate($response);

        $result = new \Mirakl\MMP\Common\Domain\Collection\SeekableCollection();

        if ($this->key) {
            $result->setCollection(new $this->class($data[$this->key]));
        }

        if (isset($data['previous_page_token'])) {
            $result->setPreviousPageToken($data['previous_page_token']);
        }

        if (isset($data['next_page_token'])) {
            $result->setNextPageToken($data['next_page_token']);
        }

        return $result;
    }
}