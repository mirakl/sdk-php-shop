<?php

declare(strict_types=1);

namespace Mirakl\Core\Domain;

interface ArrayableInterface
{
    /**
     * Give the value for an empty object
     *
     * @return mixed
     */
    public function getEmptyValue();

    /**
     * Check if current object is empty
     *
     * @return bool
     */
    public function isEmpty();

    /**
     * Converts object to array
     *
     * @return array
     */
    public function toArray();
}
