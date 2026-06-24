<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadCreated;
use Mirakl\MMP\Common\Domain\Order\Message\CreateOrderThread;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;

/**
 * (OR43) Create a thread on an order
 *
 * @method string            getOrderId()
 * @method $this             setOrderId(string $orderId)
 * @method CreateOrderThread getThread()
 * @method $this             setThread(CreateOrderThread $thread)
 */
#[ApiOperation('OR43')]
class CreateOrderThreadRequest extends AbstractFilesUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/orders/{orderId}/threads';

    /**
     * @var array
     */
    protected $uriVars = [
        '{orderId}' => 'order_id',
    ];

    /**
     * @var array
     */
    public $bodyParams = [
        'thread' => 'thread_input',
    ];

    /**
     * @param string                  $orderId
     * @param array|CreateOrderThread $thread
     */
    public function __construct($orderId, $thread)
    {
        parent::__construct();

        $this->setOrderId($orderId);
        $this->setThread($thread);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ThreadCreated::decorator();
    }
}
