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
    public function count(): int
    {
        return count($this->items);
    }

    /**
     * @param   array       $items
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
    public function exists(mixed $offset): bool
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
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items);
    }

    /**
     * @inheritdoc
     */
    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    /**
     * @param   array   $item
     * @return  mixed
     */
    public function newItem(array $item)
    {
        return strlen((string) $this->itemClass) ? new $this->itemClass($item) : $item;
    }

    /**
     * @param   mixed   $offset
     * @return  bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    /**
     * @inheritdoc
     */
    public function offsetGet($offset): mixed
    {
        return $this->items[$offset] ?? null;
    }

    /**
     * @inheritdoc
     */
    public function offsetSet(mixed $offset, $value): void
    {
        $this->items[$offset] = $value;
    }

    /**
     * @param   mixed   $offset
     */
    public function offsetUnset(mixed $offset): void
    {
        if (isset($this->items[$offset])) {
            unset($this->items[$offset]);
        }
    }

    /**
     * @param   mixed   $offset
     */
    public function remove(mixed $offset): void
    {
        $this->offsetUnset($offset);
    }

    /**
     * @return  $this
     */
    public function reset(): self
    {
        $this->items = [];

        return $this;
    }

    /**
     * @param   mixed   $key
     * @param   mixed   $value
     */
    public function set(mixed $key, mixed $value): void
    {
        $this->offsetSet($key, $value);
    }

    /**
     * @param   string  $class
     * @return  $this
     */
    public function setItemClass(string $class): self
    {
        $this->itemClass = $class;

        return $this;
    }

    /**
     * @param   array   $items
     * @return  $this
     */
    public function setItems(array $items): self
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
    public function walk(string $method, array $args = []): array
    {
        $result = [];
        foreach ($this as $key => $item) {
            $result[$key] = call_user_func_array([$item, $method], $args);
        }

        return $result;
    }
}