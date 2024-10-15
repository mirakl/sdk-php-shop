<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\AdditionalField;

/**
 * Type of an additional field of an offer
 */
class AdditionalFieldType
{
    public const STRING       = 'STRING';
    public const DATE         = 'DATE';
    public const NUMERIC      = 'NUMERIC';
    public const BOOLEAN      = 'BOOLEAN';
    public const LINK         = 'LINK';
    public const REGEX        = 'REGEX';
    public const TYPE_LIST    = 'LIST';
    public const TEXTAREA     = 'TEXTAREA';
    public const MULTI_VALUES = 'MULTIPLE_VALUES_LIST';
}
