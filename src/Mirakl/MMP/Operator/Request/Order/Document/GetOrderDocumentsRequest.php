<?php
namespace Mirakl\MMP\Operator\Request\Order\Document;

use Mirakl\MMP\Common\Request\Order\Document\AbstractGetOrderDocumentsRequest;

/**
 * (OR72) List order's documents
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Order\Document\GetOrderDocumentsRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetOrderDocumentsRequest();
 * $request->setOrderIds(['ORDER_ID_1', 'ORDER_ID_2']);
 * $result = $api->getOrderDocuments($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Order\Document\OrderDocumentCollection
 * </code>
 */
class GetOrderDocumentsRequest extends AbstractGetOrderDocumentsRequest
{}