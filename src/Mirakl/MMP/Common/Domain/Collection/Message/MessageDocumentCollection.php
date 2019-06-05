<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\MessageDocument;

/**
 * @method  MessageDocument current()
 * @method  MessageDocument first()
 * @method  MessageDocument get($offset)
 * @method  MessageDocument offsetGet($offset)
 * @method  MessageDocument last()
 */
class MessageDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = MessageDocument::class;
}