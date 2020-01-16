<?php
namespace Mirakl\MMP\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;

class SeekableCollection
{
    /**
     * @var MiraklCollection
     */
    protected $collection;

    /**
     * @var string|null
     */
    protected $previousPageToken;

    /**
     * @var string|null
     */
    protected $nextPageToken;

    /**
     * @return  MiraklCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param   MiraklCollection    $collection
     * @return  $this
     */
    public function setCollection(MiraklCollection $collection)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getPreviousPageToken()
    {
        return $this->previousPageToken;
    }

    /**
     * @param   string|null $token
     * @return  $this
     */
    public function setPreviousPageToken($token)
    {
        $this->previousPageToken = $token;

        return $this;
    }

    /**
     * @return  string|null
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param   string|null $token
     * @return  $this
     */
    public function setNextPageToken($token)
    {
        $this->nextPageToken = $token;

        return $this;
    }
}