<?php
namespace Mirakl\Core\Domain\Collection;

use Mirakl\Core\Domain\ArrayableInterface;

class MiraklCollection implements ArrayableInterface, \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * Collection items
     *
     * @var array
     */
    protected $items = [];

    /**
     * @var string|null
     */
    protected $itemClass;

    /**
     * @var int
     */
    protected $totalCount;

    /**
     * @param   array       $items
     * @param   int|null    $totalCount
     */
    public function __construct(array $items = [], $totalCount = null)
    {
        $this->setItems($items);
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
     * @return  int
     */
    public function count()
    {
        return count($this->items);
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
     * @return  \Mirakl\Core\Response\Decorator\MiraklCollection
     */
    public static function decorator($key = null)
    {
        return new \Mirakl\Core\Response\Decorator\MiraklCollection(static::class, $key);
    }

    /**
     * @param   mixed   $offset
     * @return  bool
     */
    public function exists($offset)
    {
        return $this->offsetExists($offset);
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
     * @return  array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return  int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return  \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
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
     * @param   array   $item
     * @return  array|object
     */
    public function newItem(array $item)
    {
        return strlen($this->itemClass) ? new $this->itemClass($item) : $item;
    }

    /**
     * @param   mixed   $offset
     * @return  bool
     */
    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    /**
     * @param   mixed   $offset
     * @return  mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }

    /**
     * @param   mixed   $key
     * @param   mixed   $value
     * @return  $this
     */
    public function offsetSet($key, $value)
    {
        $this->items[$key] = $value;

        return $this;
    }

    /**
     * @param   mixed   $offset
     * @return  $this
     */
    public function offsetUnset($offset)
    {
        if (isset($this->items[$offset])) {
            unset($this->items[$offset]);
        }

        return $this;
    }

    /**
     * @return  mixed
     */
    public function prev()
    {
        return prev($this->items);
    }

    /**
     * @param   mixed   $offset
     * @return  $this
     */
    public function remove($offset)
    {
        return $this->offsetUnset($offset);
    }

    /**
     * @return  $this
     */
    public function reset()
    {
        $this->items = [];

        return $this;
    }

    /**
     * @param   mixed   $key
     * @param   mixed   $value
     * @return  $this
     */
    public function set($key, $value)
    {
        return $this->offsetSet($key, $value);
    }

    /**
     * @param   string  $class
     * @return  $this
     */
    public function setItemClass($class)
    {
        $this->itemClass = $class;

        return $this;
    }

    /**
     * @param   array   $items
     * @return  $this
     */
    public function setItems(array $items)
    {
        if ($this->itemClass) {
            array_walk($items, function(&$item) {
                if (is_array($item)) {
                    $item = $this->newItem($item);
                }
            });
        }

        $this->items = $items;

        return $this;
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

    /**
     * @return  array
     */
    public function toArray()
    {
        $result = [];
        foreach ($this as $item) {
            if (is_object($item) && $item instanceof ArrayableInterface) {
                $item = $item->toArray();
            }
            $result[] = $item;
        }

        return $result;
    }

    /**
     * @param   string  $method
     * @param   array   $args
     * @return  array
     */
    public function walk($method, array $args = [])
    {
        $result = [];
        foreach ($this as $item) {
            $result[] = call_user_func_array([$item, $method], $args);
        }

        return $result;
    }
}