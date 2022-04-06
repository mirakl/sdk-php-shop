<?php
namespace Mirakl\MCI\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductDataSheetProductFeedValidationStatusCollection as ProductFeeds;

/**
 * @method ProductFeeds getProductFeeds()
 * @method $this        setProductFeeds(ProductFeeds $productFeeds)
 * @method string       getStatus()
 * @method $this        setStatus(string $status) One of \Mirakl\MCI\Common\Domain\Product\ProductDataSheetValidationStatus
 */
class ProductDataSheetValidation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'product_feeds' => [ProductFeeds::class, 'create'],
    ];
}