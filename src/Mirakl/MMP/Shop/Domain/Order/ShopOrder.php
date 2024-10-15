<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order;

use Mirakl\MMP\Common\Domain\Collection\Order\ShopOrderLineCollection;
use Mirakl\MMP\Common\Domain\Order\AbstractOrder;

/**
 * @method ShopOrderCustomer       getCustomer()
 * @method $this                   setCustomer(array|ShopOrderCustomer $customer)
 * @method string                  getCustomerNotificationEmail()
 * @method $this                   setCustomerNotificationEmail(string $customerNotificationEmail)
 * @method ShopOrderLineCollection getOrderLines()
 * @method $this                   setOrderLines(array|ShopOrderLineCollection $orderLines)
 */
class ShopOrder extends AbstractOrder
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'    => [ShopOrderCustomer::class, 'create'],
        'order_lines' => [ShopOrderLineCollection::class, 'create'],
    ];
}
