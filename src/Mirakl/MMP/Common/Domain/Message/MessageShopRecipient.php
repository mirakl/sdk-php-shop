<?php
namespace Mirakl\MMP\Common\Domain\Message;

class MessageShopRecipient extends AbstractMessageUserRecipient
{
    /**
     * @var array
     */
    protected static $mapping = [
        'to_shop_id'   => 'id',    // Shop ID if the message has been sent to a shop
        'to_shop_name' => 'name',  // Shop name if the message has been sent to a shop
    ];
}