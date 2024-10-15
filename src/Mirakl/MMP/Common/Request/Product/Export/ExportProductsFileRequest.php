<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Product\Export;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (P13) Export all products in CSV
 *
 * The response is in CSV format : product-sku;product-title;
 * product-description;category-code;active;product-references;shop-skus;brand;
 * product-url;media-url;authorized-shop-ids;variant-group-code;logistic-class
 * @see \Mirakl\MMP\Common\Request\Product\Export\ExportProductsRequest
*/
class ExportProductsFileRequest extends AbstractRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/export';

    /**
     * @inheritdoc
     */
    protected function init()
    {
        parent::init();
        $this->setOptions(['headers' => ['Accept' => 'text/csv']]);
    }
}
