<?php
namespace Mirakl\MMP\Common\Domain\Message;

class MessageCustomerRecipient extends AbstractMessageUserRecipient
{
    /**
     * @var array
     */
    protected static $mapping = [
        'to_customer_id'   => 'id',    // Customer ID, if the message has been set to the customer
        'to_customer_name' => 'name',  // Customer name, if the message has been set to the customer
    ];
}