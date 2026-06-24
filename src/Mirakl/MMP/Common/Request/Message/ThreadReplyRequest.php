<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyCreated;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadReplyMessageInput;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;

/**
 * (M12) Reply to a thread
 *
 * @method ThreadReplyMessageInput getMessageInput()
 * @method $this                   setMessageInput(array|ThreadReplyMessageInput $messageInput)
 * @method string                  getThreadId()
 * @method $this                   setThreadId(string $threadId)
 */
#[ApiOperation('M12')]
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
     * @param string                        $threadId
     * @param array|ThreadReplyMessageInput $messageInput
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
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ThreadReplyCreated::decorator();
    }
}
