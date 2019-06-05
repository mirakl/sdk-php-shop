<?php
namespace Mirakl\MMP\Common\Request\Order\Message;

use Mirakl\MMP\Common\Domain\Message\MessageCreated;
use Mirakl\MMP\Common\Domain\Order\Message\CreateOrderMessage;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR42) Post a message on an order
 *
 * @method  CreateOrderMessage  getMessage()
 * @method  $this               setMessage(array|CreateOrderMessage $message)
 */
abstract class AbstractCreateOrderMessageRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/messages';

    /**
     * @var array
     */
    public $bodyParams = ['message'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'message' => [CreateOrderMessage::class, 'create'],
    ];

    /**
     * @param   string                      $orderId
     * @param   array|CreateOrderMessage    $message
     */
    public function __construct($orderId, $message)
    {
        parent::__construct($orderId);
        $this->setMessage($message);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return MessageCreated::decorator();
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getMessage()->toArray();
    }
}