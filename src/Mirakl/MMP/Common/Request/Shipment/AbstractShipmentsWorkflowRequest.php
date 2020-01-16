<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentIdentifierCollection;
use Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowResponse;

/**
 * @method  ShipmentIdentifierCollection    getShipments()
 * @method  $this                           setShipments(array|ShipmentIdentifierCollection $shipments)
 */
abstract class AbstractShipmentsWorkflowRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var array
     */
    public $bodyParams = ['shipments'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipments' => [ShipmentIdentifierCollection::class, 'create'],
    ];

    /**
     * @param   array|ShipmentIdentifierCollection  $shipments
     */
    public function __construct($shipments)
    {
        parent::__construct();
        $this->setShipments($shipments);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShipmentWorkflowResponse::decorator();
    }
}