<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\Common\Domain\Collection\Returns\MiraklReturnCollection;

/**
 * (RT11) List returns
 *
 * @method string[]  getOrderCommercialIds()
 * @method $this     setOrderCommercialIds(string[] $orderCommercialIds)
 * @method string[]  getOrderLineIds()
 * @method $this     setOrderLineIds(string[] $orderLineIds)
 * @method \DateTime getReturnCreationDateFrom()
 * @method $this     setReturnCreationDateFrom(\DateTime $returnCreationDateFrom)
 * @method \DateTime getReturnCreationDateTo()
 * @method $this     setReturnCreationDateTo(\DateTime $returnCreationDateTo)
 * @method string[]  getReturnIds()
 * @method $this     setReturnIds(string[] $returnIds)
 * @method \DateTime getReturnLastUpdatedFrom()
 * @method $this     setReturnLastUpdatedFrom(\DateTime $returnLastUpdatedFrom)
 * @method \DateTime getReturnLastUpdatedTo()
 * @method $this     setReturnLastUpdatedTo(\DateTime $returnLastUpdatedTo)
 * @method string[]  getReturnRmas()
 * @method $this     setReturnRmas(string[] $returnRmas)
 * @method string[]  getReturnStates()
 * @method $this     setReturnStates(string[] $returnStates)
 */
abstract class AbstractGetReturnsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/returns';

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'order_commercial_id',
        'order_line_id',
        'return_id',
        'return_rma',
        'return_state',
    ];

    /**
     * @var array
     */
    public $queryParams = [
        'order_commercial_ids'      => 'order_commercial_id',
        'order_line_ids'            => 'order_line_id',
        'return_creation_date_from' => 'return_creation_date_from',
        'return_creation_date_to'   => 'return_creation_date_to',
        'return_last_updated_from'  => 'return_last_updated_from',
        'return_last_updated_to'    => 'return_last_updated_to',
        'return_ids'                => 'return_id',
        'return_rmas'               => 'return_rma',
        'return_states'             => 'return_state',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(MiraklReturnCollection::class, 'data');
    }
}
