<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferOfferAdditionalField;

/**
 * @method  AsyncExportOfferOfferAdditionalField  current()
 * @method  AsyncExportOfferOfferAdditionalField  first()
 * @method  AsyncExportOfferOfferAdditionalField  get($offset)
 * @method  AsyncExportOfferOfferAdditionalField  offsetGet($offset)
 * @method  AsyncExportOfferOfferAdditionalField  last()
 */
class AsyncExportOfferOfferAdditionalFieldCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferOfferAdditionalField::class;
}