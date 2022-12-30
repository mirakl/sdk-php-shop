<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferEcoContribution;

/**
 * @method  AsyncExportOfferEcoContribution  current()
 * @method  AsyncExportOfferEcoContribution  first()
 * @method  AsyncExportOfferEcoContribution  get($offset)
 * @method  AsyncExportOfferEcoContribution  offsetGet($offset)
 * @method  AsyncExportOfferEcoContribution  last()
 */
class AsyncExportOfferEcoContributionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferEcoContribution::class;
}