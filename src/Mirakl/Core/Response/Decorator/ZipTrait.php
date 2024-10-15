<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

trait ZipTrait
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new File('zip');
    }
}
