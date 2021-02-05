<?php
namespace Mirakl\MMP\Common\Request\Order\Message;

use Mirakl\MMP\Common\Domain\Message\Thread\ThreadCreated;
use Mirakl\MMP\Common\Domain\Order\Message\CreateOrderThread;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;

/**
 * (OR43) Create a thread on an order
 *
 * @method  string                  getOrderId()
 * @method  $this                   setOrderId(string $orderId)
 * @method  CreateOrderThread       getThread()
 * @method  $this                   setThread(string $thread)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Common\Domain\Message\Thread\ThreadTopic;
 * use Mirakl\MMP\Common\Domain\Order\Message\CreateOrderThread;
 * use Mirakl\MMP\Common\Request\Order\Message\CreateOrderThreadRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $thread = new CreateOrderThread();
 * $thread->setBody('This is an example body');
 * $thread->setTo(['SHOP', 'OPERATOR']);
 *
 * $topic = new ThreadTopic();
 * $topic->setType('FREE_TEXT');
 * $topic->setValue('This is an example');
 * $thread->setTopic($topic);
 *
 * $request = new CreateOrderThreadRequest('ORDER_ID', $thread);
 *
 * // Add a file
 * $file = new FileWrapper(new \SplFileObject('foobar.txt'));
 * $file->setFileName('test1.txt'); // Optional, only needed if file name different than 'foobar.txt'
 * $request->addFile($file);
 *
 * $result = $api->createOrderThread($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\Thread\ThreadCreated
 * </code>
 */
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
     * @param  string                   $orderId
     * @param  CreateOrderThread|array  $thread
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
    public function getResponseDecorator()
    {
        return ThreadCreated::decorator();
    }
}