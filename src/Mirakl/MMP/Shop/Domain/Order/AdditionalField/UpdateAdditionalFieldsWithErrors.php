<?php
namespace Mirakl\MMP\Shop\Domain\Order\AdditionalField;

use Mirakl\MMP\Common\Domain\InputWithErrors;

class UpdateAdditionalFieldsWithErrors extends InputWithErrors
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'input' => [UpdateAdditionalFields::class, 'create'],
    ];
}