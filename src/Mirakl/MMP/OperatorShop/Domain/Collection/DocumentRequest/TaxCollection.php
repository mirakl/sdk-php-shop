<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\Tax;

/**
 * @method Tax current()
 * @method Tax first()
 * @method Tax get($offset)
 * @method Tax offsetGet($offset)
 * @method Tax last()
 */
class TaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Tax::class;
}