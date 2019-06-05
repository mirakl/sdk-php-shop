<?php
namespace Mirakl\MMP\Common\Request\Order\Document;

use Mirakl\Core\Exception\RequestValidationException;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Order\Document\OrderDocumentCollection;

/**
 * (OR72) List order's documents
 *
 * @method  array   getOrderIds()
 */
abstract class AbstractGetOrderDocumentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/orders/documents';

    /**
     * @var array
     */
    public $queryParams = ['order_ids'];

    /**
     * @param   array   $orderIds
     * @throws  RequestValidationException
     */
    public function __construct($orderIds)
    {
        parent::__construct();
        $this->setOrderIds($orderIds);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderDocumentCollection::decorator('order_documents');
    }

    /**
     * @param   array $orderIds
     * @return  $this
     * @throws  \Mirakl\Core\Exception\RequestValidationException
     */
    public function setOrderIds(array $orderIds)
    {
        if (empty($orderIds)) {
            throw new RequestValidationException('$orderIds must be set and not empty');
        }

        return $this->setData('order_ids', $orderIds);
    }
}