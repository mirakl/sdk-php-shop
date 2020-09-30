<?php
namespace Mirakl\MMP\Common\Domain\Order\Message;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadTopic;

/**
 * @method  string      getBody()
 * @method  $this       setBody(string $body)
 * @method  array       getTo()
 * @method  $this       setTo(array $email)
 * @method  ThreadTopic getTopic()
 * @method  $this       setTopic(ThreadTopic|array $topic)
 */
class CreateOrderThread extends MiraklObject
{}