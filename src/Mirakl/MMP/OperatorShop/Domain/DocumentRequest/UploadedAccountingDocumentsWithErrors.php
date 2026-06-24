<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method ErrorCollection          getErrors()
 * @method $this                    setErrors(array|ErrorCollection $errors)
 * @method UploadAccountingDocument getInput()
 * @method $this                    setInput(array|UploadAccountingDocument $input)
 */
class UploadedAccountingDocumentsWithErrors extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors' => [ErrorCollection::class, 'create'],
        'input'  => [UploadAccountingDocument::class, 'create'],
    ];
}
