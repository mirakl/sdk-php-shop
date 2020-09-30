<?php
namespace Mirakl\MMP\Front\Request\Message;

use Mirakl\MMP\Common\Request\Message\AbstractGetThreadDetailsRequest;

/**
 * (M10) Retrieve a thread
 *
 * @method  string  getCustomerId()
 * @method  $this   setCustomerId(string $customerId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Message\GetThreadDetailsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetThreadDetailsRequest('THREAD_ID');
 * $request->setCustomerId('CUSTOMER_ID');
 * $result = $api->getThreadDetails($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\Thread\ThreadDetails
 * </code>
 */
class GetThreadDetailsRequest extends AbstractGetThreadDetailsRequest
{
    /**
     * @var array
     */
    public $queryParams = [
        'customer_id' => 'customer_id',
    ];
}