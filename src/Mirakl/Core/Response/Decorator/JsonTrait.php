<?php
namespace Mirakl\Core\Response\Decorator;

trait JsonTrait
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new File('json');
    }
}