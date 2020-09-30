<?php
namespace Mirakl\MMP\Front\Request\Message;

use Mirakl\MMP\Common\Request\Message\AbstractGetThreadsRequest;

/**
 * (M11) List all threads
 *
 * @method  string  getCustomerId()
 * @method  $this   setCustomerId(string $customerId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Message\GetThreadsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetThreadsRequest();
 * $request->setCustomerId('CUSTOMER_ID');
 * $request->setEntityType('MMP_ORDER');
 * $request->setEntityId('ORDER_ID');
 * $result = $api->getThreads($request);
 * // $result => @see \Mirakl\Core\Response\Decorator\SeekableCollection
 * </code>
 */
class GetThreadsRequest extends AbstractGetThreadsRequest
{
    /**
     * @var array
     */
    public $queryParams = [
        'entity_type',
        'entity_id',
        'customer_id',
    ];
}