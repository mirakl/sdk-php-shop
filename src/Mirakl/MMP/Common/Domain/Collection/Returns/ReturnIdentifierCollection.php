<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnIdentifier;

/**
 * @method ReturnIdentifier current()
 * @method ReturnIdentifier first()
 * @method ReturnIdentifier get($offset)
 * @method ReturnIdentifier offsetGet($offset)
 * @method ReturnIdentifier last()
 */
class ReturnIdentifierCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnIdentifier::class;
}
