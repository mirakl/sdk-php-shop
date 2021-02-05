<?php
namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection;

/**
 * (SH31) List all logistic classes
 */
abstract class AbstractGetLogisticClassRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/logistic_classes';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return LogisticClassCollection::decorator('logistic_classes');
    }
}