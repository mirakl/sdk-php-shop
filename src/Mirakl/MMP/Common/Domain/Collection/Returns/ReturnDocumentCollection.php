<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnDocument;

/**
 * @method ReturnDocument current()
 * @method ReturnDocument first()
 * @method ReturnDocument get($offset)
 * @method ReturnDocument offsetGet($offset)
 * @method ReturnDocument last()
 */
class ReturnDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnDocument::class;
}
