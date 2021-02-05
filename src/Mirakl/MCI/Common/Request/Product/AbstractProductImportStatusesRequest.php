<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\MCI\Common\Domain\Collection\Product\ProductImportResultCollection;

/**
 * @method  bool        getHasTransformedFile()
 * @method  $this       setHasTransformedFile(bool $hasTransformedFile)
 * @method  \DateTime   getLastRequestDate()
 * @method  $this       setLastRequestDate(\DateTime $lastRequestDate)
 * @method  string      getShopId()
 * @method  $this       setShopId(string $shopId)
 * @method  string      getStatus()
 * @method  $this       setStatus(string $status)
 */
abstract class AbstractProductImportStatusesRequest extends AbstractRequest
{
    use PageableTrait;
    use SortableTrait;

    // (DEFAULT) Sort by date created
    const SORT_BY_DATE_CREATED = 'dateCreated';

    // Sort by last updated
    const SORT_BY_LAST_UPDATED = 'lastUpdated';

    /**
     * @var string
     */
    protected $endpoint = '/products/imports';

    /**
     * @var array
     */
    public $queryParams = ['has_transformed_file', 'last_request_date', 'status', 'shop_id'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductImportResultCollection::decorator('product_import_trackings');
    }
}