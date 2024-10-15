<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getLastUpdated()
 * @method $this     setLastUpdated(\DateTime $lastUpdated)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 * @method string[]  getUrls()
 * @method $this     setUrls(string[] $urls)
 */
class ExportOrdersAsyncStatusResponse extends MiraklObject
{
}
