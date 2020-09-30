<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Incident;

/**
 * (OR62) Open an incident on line of the order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Incident\CloseIncidentRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CloseIncidentRequest('394IDJE-A', '394IDJE-A-1', '5');
 *
 * $api->closeIncident($request);
 *
 * </code>
 */
class OpenIncidentRequest extends AbstractIncidentRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/lines/{line}/open_incident';
}