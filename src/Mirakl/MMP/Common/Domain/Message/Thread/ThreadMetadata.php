<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  int         getTotalCount()
 * @method  $this       setTotalCount(string $totalCount)
 * @method  \DateTime   getLastMessageDate()
 * @method  $this       setLastMessageDate(\DateTime $lastMessageDate)
 */
class ThreadMetadata extends MiraklObject
{}