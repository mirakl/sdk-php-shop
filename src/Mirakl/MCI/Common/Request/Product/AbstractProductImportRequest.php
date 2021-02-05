<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;

abstract class AbstractProductImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/imports';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductImportTracking::decorator();
    }
}