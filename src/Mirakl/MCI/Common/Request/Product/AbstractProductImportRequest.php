<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;

/**
 * (P41) Import products to Operator Information System
 *
 * @method bool  isOperatorFormat()
 * @method bool  getOperatorFormat()
 * @method $this setOperatorFormat(bool $flag)
 */
abstract class AbstractProductImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/imports';

    /**
     * @var array
     */
    public $bodyParams = ['shop', 'operator_format'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductImportTracking::decorator();
    }
}