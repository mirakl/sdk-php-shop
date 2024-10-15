<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain;

class UserType
{
    // Returns all messages from all users (parameters "received" should not be used)
    public const ALL      = 'ALL';

    // Returns all messages from or to a customer (parameters "received" concerns the customer)
    public const CUSTOMER = 'CUSTOMER';

    // Returns all messages from or to a shop (parameters "received" concerns the shop)
    public const SHOP     = 'SHOP';

    // Returns all messages from or to an operator (parameters "received" concerns the operator)
    public const OPERATOR = 'OPERATOR';
}
