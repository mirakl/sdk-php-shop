<?php
namespace Mirakl\MMP\Common\Request\Order\Async\Export;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\Core\Response\Decorator\JsonTrait as JsonResponseDecorator;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 */
abstract class AbstractExportOrdersAsyncDownloadFileJsonRequest extends AbstractFileUrlRequest
{
    use JsonResponseDecorator;
}