<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\AdditionalField;

/**
 * Type of entity to which is assigned the additional field
 */
class AdditionalFieldLinkedEntity
{
    public const SHOP       = 'SHOP';
    public const OFFER      = 'OFFER';
    public const ORDER_LINE = 'ORDER_LINE';
}
