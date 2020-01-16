<?php
namespace Mirakl\Core\Request;

trait SeekableTrait
{
    /**
     * Limit from 10 (default) to 100 (max)
     *
     * @var int
     */
    protected $limit = 10;

    /**
     * Indicate whether or not this API should return the page associated to this token.
     * Please note that all other parameters are ignored when this token is present in request.
     *
     * @var bool
     */
    protected $pageToken;

    /**
     * @return  int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return  bool
     */
    public function getPageToken()
    {
        return $this->pageToken;
    }

    /**
     * @param   int $limit
     * @return  $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param   string  $pageToken
     * @return  $this
     */
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;

        return $this;
    }
}