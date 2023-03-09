<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shop\ProducerIdentifier;

/**
 * @method ProducerIdentifier current()
 * @method ProducerIdentifier first()
 * @method ProducerIdentifier get($offset)
 * @method ProducerIdentifier offsetGet($offset)
 * @method ProducerIdentifier last()
 */
class ProducerIdentifierCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProducerIdentifier::class;
}