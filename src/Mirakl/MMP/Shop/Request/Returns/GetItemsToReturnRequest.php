<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Returns\ItemToReturnCollection;

/**
 * (RT12) List items to return
 *
 * @method string[] getOrderCommercialIds()
 * @method $this    setOrderCommercialIds(string[] $orderCommercialIds)
 * @method string[] getOrderLineIds()
 * @method $this    setOrderLineIds(string[] $orderLineIds)
 */
#[ApiOperation('RT12')]
class GetItemsToReturnRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/returns/items_to_return';

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'order_commercial_id',
        'order_line_id',
    ];

    /**
     * @var array
     */
    public $queryParams = [
        'order_commercial_ids' => 'order_commercial_id',
        'order_line_ids' => 'order_line_id',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(ItemToReturnCollection::class, 'data');
    }
}
