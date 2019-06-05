<?php
namespace Mirakl\Core\Request;

trait PageableTrait
{
    /**
     * @var int
     */
    protected $max = 10;

    /**
     * @var int
     */
    protected $offset = 0;

    /**
     * Indicate whether or not this API should return paginated results
     *
     * @var bool
     */
    protected $paginate = true;

    /**
     * @return  int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return  int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return  bool
     */
    public function getPaginate()
    {
        return $this->paginate;
    }

    /**
     * @param   int $max
     * @return  $this
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param   int $offset
     * @return  $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param   bool    $flag
     * @return  $this
     */
    public function setPaginate($flag)
    {
        $this->paginate = $flag;

        return $this;
    }
}