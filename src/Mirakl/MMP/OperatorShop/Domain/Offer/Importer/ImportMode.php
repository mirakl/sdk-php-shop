<?php
namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

class ImportMode
{
    // Update shop's offers: insert, update (if offer already exists) or delete offer
    const NORMAL = 'NORMAL';

    // Partial update shop's offers (only if field not empty)
    const PARTIAL_UPDATE = 'PARTIAL_UPDATE';

    // Replace all shop's offers
    const REPLACE = 'REPLACE';
}