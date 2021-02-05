<?php
namespace Mirakl\MMP\Common\Domain;

class UserType
{
    // Returns all messages from all users (parameters "received" should not be used)
    const ALL      = 'ALL';

    // Returns all messages from or to a customer (parameters "received" concerns the customer)
    const CUSTOMER = 'CUSTOMER';

    // Returns all messages from or to a shop (parameters "received" concerns the shop)
    const SHOP     = 'SHOP';

    // Returns all messages from or to an operator (parameters "received" concerns the operator)
    const OPERATOR = 'OPERATOR';
}