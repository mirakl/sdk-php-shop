<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

trait PdfTrait
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new File('pdf');
    }
}
