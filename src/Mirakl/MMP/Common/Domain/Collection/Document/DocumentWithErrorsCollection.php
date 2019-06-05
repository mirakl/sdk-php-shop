<?php
namespace Mirakl\MMP\Common\Domain\Collection\Document;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Document\DocumentWithErrors;

/**
 * @method  DocumentWithErrors  current()
 * @method  DocumentWithErrors  first()
 * @method  DocumentWithErrors  get($offset)
 * @method  DocumentWithErrors  offsetGet($offset)
 * @method  DocumentWithErrors  last()
 */
class DocumentWithErrorsCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DocumentWithErrors::class;
}