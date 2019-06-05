<?php
namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 */
abstract class AbstractGetShippingCarriersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipping/carriers';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CarrierCollection::decorator('carriers');
    }
}