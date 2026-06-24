<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Cancelation;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Order\Cancelation\AbstractCreateCancelationsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\CreateCancelationCollection;
use Mirakl\MMP\Shop\Domain\Order\Cancelation\CancelationsCreated;

/**
 * (OR30) Demand cancelations on order lines
 *
 * @method CreateCancelationCollection getCancelations()
 * @method $this                       setCancelations(array|CreateCancelationCollection $cancelations)
 */
#[ApiOperation('OR30')]
class CreateCancelationsRequest extends AbstractCreateCancelationsRequest
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'cancelations' => [CreateCancelationCollection::class, 'create'],
    ];

    /**
     * @param array|CreateCancelationCollection $cancelations
     */
    public function __construct($cancelations)
    {
        parent::__construct();

        $this->setCancelations($cancelations);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return CancelationsCreated::decorator();
    }
}
