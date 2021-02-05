<?php
namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingTypeWithDescriptionCollection;

/**
 * (SH12) List all active shipping methods
 */
abstract class AbstractGetShippingTypesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/types';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShippingTypeWithDescriptionCollection::decorator('shipping_types');
    }
}