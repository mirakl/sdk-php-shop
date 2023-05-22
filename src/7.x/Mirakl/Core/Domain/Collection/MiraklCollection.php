<?php
namespace Mirakl\Core\Domain\Collection;

use Mirakl\Core\Domain\ArrayableInterface;
use Mirakl\Core\Response\Decorator;

class MiraklCollection extends AbstractMiraklArray
{
    /**
     * @var int|null
     */
    protected $totalCount;

    /**
     * @param   array       $items
     * @param   int|null    $totalCount
     */
    public function __construct(array $items = [], $totalCount = null)
    {
        parent::__construct($items);
        if (null !== $totalCount) {
            $this->setTotalCount($totalCount);
        }
    }

    /**
     * @param   mixed   $item
     * @return  $this
     */
    public function add($item)
    {
        $this->items[] = !is_object($item) ? $this->newItem($item) : $item;

        return $this;
    }

    /**
     * @param   array       $items
     * @param   int|null    $totalCount
     * @return  $this
     */
    public static function create(array $items = [], $totalCount = null)
    {
        return new static($items, $totalCount);
    }

    /**
     * @return  mixed
     */
    public function current()
    {
        return current($this->items);
    }

    /**
     * Useful method for requests returning collections
     *
     * @param   string|null $key
     * @return  Decorator\MiraklCollection
     */
    public static function decorator(?string $key = null)
    {
        return new Decorator\MiraklCollection(static::class, $key);
    }

    /**
     * @return  mixed
     */
    public function first()
    {
        return reset($this->items);
    }

    /**
     * @param   $offset
     * @return  mixed
     */
    public function get($offset)
    {
        return $this->offsetGet($offset);
    }

    /**
     * @inheritdoc
     */
    public function getEmptyValue()
    {
        return [];
    }

    /**
     * @return  int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return  mixed
     */
    public function last()
    {
        return end($this->items);
    }

    /**
     * @return  mixed
     */
    public function next()
    {
        return next($this->items);
    }

    /**
     * @return  mixed
     */
    public function prev()
    {
        return prev($this->items);
    }

    /**
     * @param   int     $totalCount
     * @return  $this
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;

        return $this;
    }
}