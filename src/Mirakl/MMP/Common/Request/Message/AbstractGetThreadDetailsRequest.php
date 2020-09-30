<?php
namespace Mirakl\MMP\Common\Request\Message;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadDetails;

/**
 * (M10) Retrieve a thread
 *
 * @method  string  getThreadId()
 * @method  $this   setThreadId(string $threadId)
 */
abstract class AbstractGetThreadDetailsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/inbox/threads/{thread}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{thread}' => 'thread_id',
    ];

    /**
     * @param   string  $threadId
     */
    public function __construct($threadId)
    {
        parent::__construct();
        $this->setThreadId($threadId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ThreadDetails::decorator();
    }
}