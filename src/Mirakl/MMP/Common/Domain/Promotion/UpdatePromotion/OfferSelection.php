<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion;

/**
 * @method array getValues()
 * @method $this setValues(array $values)
 */
class OfferSelection extends Selection
{
    /**
     * @var string
     */
    public static $type = 'OFFER';
}
