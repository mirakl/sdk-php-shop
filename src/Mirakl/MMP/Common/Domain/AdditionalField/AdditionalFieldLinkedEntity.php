<?php
namespace Mirakl\MMP\Common\Domain\AdditionalField;

/**
 * Type of entity to which is assigned the additional field
 */
class AdditionalFieldLinkedEntity
{
    const SHOP       = 'SHOP';
    const OFFER      = 'OFFER';
    const ORDER_LINE = 'ORDER_LINE';
}