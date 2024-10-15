<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

class ImportMode
{
    // Update shop's offers: insert, update (if offer already exists) or delete offer
    public const NORMAL = 'NORMAL';

    // Partial update shop's offers (only if field not empty)
    public const PARTIAL_UPDATE = 'PARTIAL_UPDATE';

    // Replace all shop's offers
    public const REPLACE = 'REPLACE';
}
