<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Incident;

/**
 * (OR63) Close an incident on line of the order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Incident\CloseIncidentRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CloseIncidentRequest('ORDER_ID', 'ORDER_LINE_ID', 'REASON_CODE');
 * $api->closeIncident($request);
 *
 * </code>
 */
class CloseIncidentRequest extends AbstractIncidentRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/lines/{line}/close_incident';
}