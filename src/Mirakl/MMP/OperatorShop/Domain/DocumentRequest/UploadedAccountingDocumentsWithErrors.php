<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method ErrorCollection          getErrors()
 * @method $this                    setErrors(ErrorCollection|array $errors)
 * @method UploadAccountingDocument getInput()
 * @method $this                    setInput(UploadAccountingDocument|array $input)
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