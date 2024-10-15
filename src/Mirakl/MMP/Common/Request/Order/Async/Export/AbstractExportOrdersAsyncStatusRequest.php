<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Async\Export;

use Mirakl\Core\Request\AbstractTrackingRequest;
use Mirakl\MMP\Common\Domain\Order\Async\Export\ExportOrdersAsyncStatusResponse;

/**
 * (OR14) Poll the status of an asynchronous orders export (OR13)
 *
 * Retrieve the status for an OR13 orders export request.
 * When the export is complete, the URLs to retrieve the files are returned (OR15).
 */
abstract class AbstractExportOrdersAsyncStatusRequest extends AbstractTrackingRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/orders/async-export/status/{tracking_id}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ExportOrdersAsyncStatusResponse::decorator();
    }
}
