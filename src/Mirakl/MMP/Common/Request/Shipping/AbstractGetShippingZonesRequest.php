<?php
namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingZoneDetailCollection;

/**
 * (SH11) List all shipping zones
 */
abstract class AbstractGetShippingZonesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/zones';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShippingZoneDetailCollection::decorator('shipping_zones');
    }
}