<?php
namespace Mirakl\MMP\Common\Request\Order\Message;

use Mirakl\MMP\Common\Domain\Collection\Message\OrderMessageCollection;
use Mirakl\MMP\Common\Request\Message\AbstractGetMessagesRequest;

/**
 * (M01) List messages of an order (sort by creation date)
 * By default, all sent and received messages are listed
 * Note: this resource supports pagination and will return 10 messages
 *
 * @method  string  getOrderId()
 * @method  $this   setOrderId(string $orderId)
 */
abstract class AbstractGetOrderMessagesRequest extends AbstractGetMessagesRequest
{
    /**
     * @param   string  $orderId
     */
    public function __construct($orderId)
    {
        parent::__construct();
        $this->setOrderId($orderId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderMessageCollection::decorator('messages');
    }
}