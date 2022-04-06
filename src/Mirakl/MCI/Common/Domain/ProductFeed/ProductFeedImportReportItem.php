<?php
namespace Mirakl\MCI\Common\Domain\ProductFeed;

use Mirakl\MCI\Common\Domain\Collection\ProductFeed\ProductFeedImportErrorCollection as Errors;

/**
 * @method Errors getErrors()
 * @method $this  setErrors(Errors $errors)
 * @method string getStatus()
 * @method $this  setStatus(string $status) One of \Mirakl\MCI\Common\Domain\ProductFeed\ProductFeedImportReportStatus
 */
class ProductFeedImportReportItem extends ProductFeedImportItem
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors' => [Errors::class, 'create'],
    ];
}