<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\MCI\Common\Domain\Product\ProductImportResult;

abstract class AbstractProductImportStatusRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductImportResult::decorator();
    }
}