<?php
namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyCreated;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyMessageInput;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;

/**
 * (M12) Reply to a thread
 *
 * @method  ThreadReplyMessageInput getMessageInput()
 * @method  $this                   setMessageInput(ThreadReplyMessageInput|array $messageInput)
 * @method  string                  getThreadId()
 * @method  $this                   setThreadId(string $threadId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\Core\Domain\FileWrapper;
 * use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadRecipientCollection;
 * use Mirakl\MMP\Common\Domain\Message\Thread\ThreadRecipient;
 * use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyMessageInput;
 * use Mirakl\MMP\Common\Request\Message\ThreadReplyRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $recipient1 = new ThreadRecipient();
 * $recipient1->setType('OPERATOR');
 * $recipient2 = new ThreadRecipient();
 * $recipient2->setId('116');
 * $recipient2->setType('SHOP');
 *
 * $recipients = new ThreadRecipientCollection();
 * $recipients->add($recipient1);
 * $recipients->add($recipient2);
 *
 * $input = new ThreadReplyMessageInput();
 * $input->setBody('this is the body of my reply');
 * $input->setTo($recipients);
 *
 * $request = new ThreadReplyRequest('THREAD_ID', $input);
 *
 * // Add a file
 * $file = new FileWrapper(new \SplFileObject('foobar.txt'));
 * $file->setFileName('test1.txt'); // Optional, only needed if file name different than 'foobar.txt'
 * $request->addFile($file);
 *
 * $result = $api->replyToThread($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyCreated
 * </code>
 */
class ThreadReplyRequest extends AbstractFilesUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/inbox/threads/{thread}/message';

    /**
     * @var array
     */
    protected $uriVars = [
        '{thread}' => 'thread_id',
    ];

    /**
     * @var array
     */
    public $bodyParams = [
        'message_input',
    ];

    /**
     * @param  string                         $threadId
     * @param  ThreadReplyMessageInput|array  $messageInput
     */
    public function __construct($threadId, $messageInput)
    {
        parent::__construct();
        $this->setThreadId($threadId);
        $this->setMessageInput($messageInput);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ThreadReplyCreated::decorator();
    }
}