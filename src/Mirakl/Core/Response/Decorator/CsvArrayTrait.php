<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

trait CsvArrayTrait
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new CsvArray();
    }
}
