<?php
namespace Mirakl\MCI\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductDataSheetChannelValidationStatusCollection;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductDataSheetProductFeedValidationStatusCollection as ProductFeeds;

/**
 * @method ProductFeeds                                       getProductFeeds() // @deprecated
 * @method $this                                              setProductFeeds(ProductFeeds $productFeeds) // @deprecated
 * @method ProductDataSheetChannelValidationStatusCollection  getChannels()
 * @method $this                                              setChannels(ProductDataSheetChannelValidationStatusCollection $channels)
 * @method string                                             getStatus()
 * @method $this                                              setStatus(string $status) One of \Mirakl\MCI\Common\Domain\Product\ProductDataSheetValidationStatus
 */
class ProductDataSheetValidation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'product_feeds' => [ProductFeeds::class, 'create'],
        'channels'      => [ProductDataSheetChannelValidationStatusCollection::class, 'create'],
    ];
}