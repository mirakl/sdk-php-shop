<?php
declare(strict_types=1);

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
    public function __construct(array $items = [], ?int $totalCount = null)
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
    public function add(mixed $item): self
    {
        $this->items[] = !is_object($item) ? $this->newItem($item) : $item;

        return $this;
    }

    /**
     * @param   array       $items
     * @param   int|null    $totalCount
     * @return  $this
     */
    public static function create(array $items = [], ?int $totalCount = null)
    {
        return new static($items, $totalCount);
    }

    /**
     * @return  mixed
     */
    public function current(): mixed
    {
        return current($this->items);
    }

    /**
     * Useful method for requests returning collections
     *
     * @param   string|null $key
     * @return  Decorator\MiraklCollection
     */
    public static function decorator(?string $key = null): Decorator\MiraklCollection
    {
        return new Decorator\MiraklCollection(static::class, $key);
    }

    /**
     * @return  mixed
     */
    public function first(): mixed
    {
        return reset($this->items);
    }

    /**
     * @param   $offset
     * @return  mixed
     */
    public function get($offset): mixed
    {
        return $this->offsetGet($offset);
    }

    /**
     * @return  int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @return  mixed
     */
    public function last(): mixed
    {
        return end($this->items);
    }

    /**
     * @return  mixed
     */
    public function next(): mixed
    {
        return next($this->items);
    }

    /**
     * @return  mixed
     */
    public function prev(): mixed
    {
        return prev($this->items);
    }

    /**
     * @param   int     $totalCount
     * @return  $this
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }
}