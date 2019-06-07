<?php
namespace Mirakl\MMP\Common\Request\Product;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\ProductReferencesTrait;

/**
 * (P31) Get products for a list of product's references
 *
 * Sort by product sku and then by product identifier
 * Note: this resource return 100 products maximum
 */
abstract class AbstractGetProductsRequest extends AbstractRequest
{
    use PageableTrait;
    use ProductReferencesTrait;
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/products';

    /**
     * @var array
     */
    public $queryParams = ['products_references'];

    /**
     * @param   array   $productReferences
     */
    public function __construct(array $productReferences)
    {
        parent::__construct();
        $this->setProductReferences($productReferences);
    }
}