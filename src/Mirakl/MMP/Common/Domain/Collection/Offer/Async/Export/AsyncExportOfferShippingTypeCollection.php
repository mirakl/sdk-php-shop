<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferShippingType;

/**
 * @method  AsyncExportOfferShippingType  current()
 * @method  AsyncExportOfferShippingType  first()
 * @method  AsyncExportOfferShippingType  get($offset)
 * @method  AsyncExportOfferShippingType  offsetGet($offset)
 * @method  AsyncExportOfferShippingType  last()
 */
class AsyncExportOfferShippingTypeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferShippingType::class;
}