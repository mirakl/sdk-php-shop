<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\OfferMessage;

/**
 * @method  OfferMessage    current()
 * @method  OfferMessage    first()
 * @method  OfferMessage    get($offset)
 * @method  OfferMessage    offsetGet($offset)
 * @method  OfferMessage    last()
 */
class OfferMessageCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferMessage::class;
}