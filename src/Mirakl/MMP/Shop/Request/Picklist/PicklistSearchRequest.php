<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Picklist;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Picklist\PicklistCollection;

/**
 * (PL11) List picklists
 *
 * @method string[]  getOrderLineId()
 * @method $this     setOrderLineId(string[] $orderLineIds)
 * @method string[]  getPicklistState()
 * @method $this     setPicklistState(string[] $picklistStates)
 * @method string    getPickrunCode()
 * @method $this     setPickrunCode(string $pickrunCode)
 * @method string[]  getPicklistId()
 * @method $this     setPicklistId(string[] $picklistIds)
 * @method \DateTime getPickupDateMax()
 * @method $this     setPickupDateMax(\DateTime $pickupDateMax)
 * @method \DateTime getPickupDateMin()
 * @method $this     setPickupDateMin(\DateTime $pickupDateMin)
 */
#[ApiOperation('PL11')]
class PicklistSearchRequest extends AbstractRequest
{
    use SortableTrait;
    use SeekableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/picklists';

    /**
     * @var array
     */
    public $queryParams = [
        'order_line_id',
        'picklist_state',
        'picklist_id',
        'pickup_date_max',
        'pickup_date_min',
        'pickrun_code',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(PicklistCollection::class, 'data');
    }
}
