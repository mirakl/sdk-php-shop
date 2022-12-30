<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\InitialDocument;

/**
 * @method InitialDocument current()
 * @method InitialDocument first()
 * @method InitialDocument get($offset)
 * @method InitialDocument offsetGet($offset)
 * @method InitialDocument last()
 */
class InitialDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = InitialDocument::class;
}