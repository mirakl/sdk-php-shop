<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain\Collection;

class MiraklMap extends AbstractMiraklArray
{
    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return $this->offsetGet($key);
    }

    /**
     * @param string $key
     * @param mixed  $item
     * @return $this
     */
    public function put(string $key, mixed $item = null): self
    {
        $this->items[$key] = !is_object($item) ? $this->newItem($item) : $item;

        return $this;
    }
}
