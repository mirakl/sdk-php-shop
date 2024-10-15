<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

trait CsvTrait
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new File('csv');
    }
}
