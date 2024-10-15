<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Shop\Billing;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Shop\Billing\SpecificBillingInformation;

/**
 * @method SpecificBillingInformation current()
 * @method SpecificBillingInformation first()
 * @method SpecificBillingInformation get($offset)
 * @method SpecificBillingInformation offsetGet($offset)
 * @method SpecificBillingInformation last()
 */
class SpecificBillingInformationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = SpecificBillingInformation::class;
}
