<?php
namespace Mirakl\MCI\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductDataSheetChannelValidationStatusCollection;

/**
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
        'channels' => [ProductDataSheetChannelValidationStatusCollection::class, 'create'],
    ];
}