<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\Fee;

/**
 * @method Fee current()
 * @method Fee first()
 * @method Fee get($offset)
 * @method Fee offsetGet($offset)
 * @method Fee last()
 */
class FeeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Fee::class;
}
