<?php
namespace Mirakl\MMP\FrontOperator\Domain\Order\AdditionalField;

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