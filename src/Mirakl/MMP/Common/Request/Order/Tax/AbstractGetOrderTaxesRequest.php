<?php
namespace Mirakl\MMP\Common\Request\Order\Tax;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR75) Get the order taxes defined on the platform
 */
abstract class AbstractGetOrderTaxesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/orders/taxes';
}