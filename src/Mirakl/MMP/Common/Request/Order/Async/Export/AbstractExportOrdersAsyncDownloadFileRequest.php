<?php
namespace Mirakl\MMP\Common\Request\Order\Async\Export;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 */
abstract class AbstractExportOrdersAsyncDownloadFileRequest extends AbstractFileUrlRequest
{}