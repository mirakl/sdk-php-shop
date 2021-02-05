<?php
namespace Mirakl\MMP\Common\Domain\AdditionalField;

/**
 * Type of an additional field of an offer
 */
class AdditionalFieldType
{
    const STRING       = 'STRING';
    const DATE         = 'DATE';
    const NUMERIC      = 'NUMERIC';
    const BOOLEAN      = 'BOOLEAN';
    const LINK         = 'LINK';
    const REGEX        = 'REGEX';
    const TYPE_LIST    = 'LIST';
    const TEXTAREA     = 'TEXTAREA';
    const MULTI_VALUES = 'MULTIPLE_VALUES_LIST';
}