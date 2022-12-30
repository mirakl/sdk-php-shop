<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\DocumentRequestLineResponse;

/**
 * @method DocumentRequestLineResponse current()
 * @method DocumentRequestLineResponse first()
 * @method DocumentRequestLineResponse get($offset)
 * @method DocumentRequestLineResponse offsetGet($offset)
 * @method DocumentRequestLineResponse last()
 */
class DocumentRequestLineResponseCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DocumentRequestLineResponse::class;
}