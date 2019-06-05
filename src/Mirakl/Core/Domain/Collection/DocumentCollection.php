<?php
namespace Mirakl\Core\Domain\Collection;

use Mirakl\Core\Domain\Document;

/**
 * @method  Document    current()
 * @method  Document    first()
 * @method  Document    get($offset)
 * @method  Document    offsetGet($offset)
 * @method  Document    last()
 */
class DocumentCollection extends FileCollection
{
    /**
     * @var string
     */
    protected $itemClass = Document::class;
}