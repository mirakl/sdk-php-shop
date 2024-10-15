<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Product;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\ProductReferencesTrait;
use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;

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
     * @param ProductReference[]|array $productReferences
     */
    public function __construct(array $productReferences)
    {
        parent::__construct();

        $this->setProductReferences($productReferences);
    }
}
