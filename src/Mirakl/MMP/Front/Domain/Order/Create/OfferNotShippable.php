<?php
namespace Mirakl\MMP\Front\Domain\Order\Create;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 * @method  string  getReason()
 * @method  $this   setReason(string $reason)
 * @see     \Mirakl\MMP\Front\Domain\Order\Create\OfferNotShippableReason
 */
class OfferNotShippable extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer_id'   => 'id',
        'error_code' => 'reason',
    ];
}