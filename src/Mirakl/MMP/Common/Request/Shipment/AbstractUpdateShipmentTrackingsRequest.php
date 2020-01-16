<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipment\UpdateShipmentTrackingCollection;
use Mirakl\MMP\Common\Domain\Shipment\UpdatedShipmentTrackings;

/**
 * (ST23) Update carrier tracking information for shipments
 *
 * If the carrier is not registered, the complete tracking url can be provided.
 * Limited to 1000 shipments at a time.
 *
 * @method  UpdateShipmentTrackingCollection    getShipments()
 * @method  $this                               setShipments(array|UpdateShipmentTrackingCollection $updateShipmentTrackings)
 */
abstract class AbstractUpdateShipmentTrackingsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/shipments/tracking';

    /**
     * @var array
     */
    public $bodyParams = ['shipments'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipments' => [UpdateShipmentTrackingCollection::class, 'create'],
    ];

    /**
     * @param   array|UpdateShipmentTrackingCollection  $updateShipmentTrackings
     */
    public function __construct($updateShipmentTrackings)
    {
        parent::__construct();
        $this->setShipments($updateShipmentTrackings);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UpdatedShipmentTrackings::decorator();
    }
}