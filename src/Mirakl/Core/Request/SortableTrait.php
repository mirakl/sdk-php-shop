<?php
namespace Mirakl\Core\Request;

trait SortableTrait
{
    /**
     * @var string
     */
    protected $sortBy;

    /**
     * @var string
     */
    protected $dir;

    /**
     * @return  string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param   string  $dir
     * @return  $this
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * @return  string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @param   string  $sortBy
     * @return  $this
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }

    /**
     * @return  $this
     */
    public function sortAsc()
    {
        $this->dir = 'ASC';

        return $this;
    }

    /**
     * @return  $this
     */
    public function sortDesc()
    {
        $this->dir = 'DESC';

        return $this;
    }
}