<?php
declare(strict_types=1);

namespace Mirakl\Core\Domain\Collection;

use Mirakl\Core\Domain\ArrayableInterface;

abstract class AbstractMiraklArray implements ArrayableInterface, \ArrayAccess, \IteratorAggregate, \Countable
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
     * @param   array   $items
     */
    public function __construct(array $items = [])
    {
        $this->setItems($items);
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @param   array   $items
     * @return  $this
     */
    public static function create(array $items = [])
    {
        return new static($items);
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
     * @inheritdoc
     */
    public function getEmptyValue()
    {
        return [];
    }

    /**
     * @return  array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }

    /**
     * @inheritdoc
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    /**
     * @param   array   $item
     * @return  mixed
     */
    public function newItem(array $item)
    {
        return strlen($this->itemClass) ? new $this->itemClass($item) : $item;
    }

    /**
     * @inheritdoc
     */
    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    /**
     * @inheritdoc
     */
    public function offsetGet($offset)
    {
        return $this->items[$offset] ?? null;
    }

    /**
     * @inheritdoc
     */
    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = $value;
    }

    /**
     * @inheritdoc
     */
    public function offsetUnset($offset)
    {
        if (isset($this->items[$offset])) {
            unset($this->items[$offset]);
        }
    }

    /**
     * @param   mixed   $offset
     */
    public function remove($offset)
    {
        $this->offsetUnset($offset);
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
     */
    public function set($key, $value)
    {
        $this->offsetSet($key, $value);
    }

    /**
     * @param   string  $class
     * @return  $this
     */
    public function setItemClass(string $class)
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
     * @inheritdoc
     */
    public function toArray()
    {
        $result = [];
        foreach ($this as $key => $item) {
            if (is_object($item) && $item instanceof ArrayableInterface) {
                $item = $item->toArray();
            }
            $result[$key] = $item;
        }

        return $result;
    }

    /**
     * @param   string  $method
     * @param   array   $args
     * @return  array
     */
    public function walk(string $method, array $args = [])
    {
        $result = [];
        foreach ($this as $key => $item) {
            $result[$key] = call_user_func_array([$item, $method], $args);
        }

        return $result;
    }
}