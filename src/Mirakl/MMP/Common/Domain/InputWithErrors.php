<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method  ErrorCollection getErrors()
 * @method  $this           setErrors(array|ErrorCollection $errors)
 * @method  array           getInput()
 * @method  $this           setInput(array $input)
 */
class InputWithErrors extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors' => [ErrorCollection::class, 'create'],
    ];
}