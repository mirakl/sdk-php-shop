<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\Selection;

use Mirakl\MMP\Common\Domain\Promotion\Selection;

/**
 * @method array getValues()
 * @method $this setValues(array $values)
 */
class ProductSelection extends Selection
{
    /**
     * @var string
     */
    public static $type = 'PRODUCT';
}
