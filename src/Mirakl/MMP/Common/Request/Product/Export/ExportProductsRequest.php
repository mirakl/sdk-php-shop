<?php
namespace Mirakl\MMP\Common\Request\Product\Export;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Product\Export\ExportProductCollection;

/**
 * (P13) Export all products
 *
 * A JSON InputStream that can be deserialize in a list of {@link \Mirakl\MMP\Common\Domain\Product\Export\ExportProduct}.
 * Please be aware that this API might return a large number of products, thus JSON deserialization should be done accordingly.
 */
class ExportProductsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/export';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ExportProductCollection::decorator('products');
    }
}