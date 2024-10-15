<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\Offer\Pricing\Importer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Offer\Pricing\Importer\OfferPricingsImportReport;

/**
 * @method OfferPricingsImportReport current()
 * @method OfferPricingsImportReport first()
 * @method OfferPricingsImportReport get($offset)
 * @method OfferPricingsImportReport offsetGet($offset)
 * @method OfferPricingsImportReport last()
 */
class OfferPricingsImportReportCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferPricingsImportReport::class;
}
