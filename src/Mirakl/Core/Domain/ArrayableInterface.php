<?php
namespace Mirakl\Core\Domain;

interface ArrayableInterface
{
    /**
     * Converts object to array
     *
     * @return  array
     */
    public function toArray();
}