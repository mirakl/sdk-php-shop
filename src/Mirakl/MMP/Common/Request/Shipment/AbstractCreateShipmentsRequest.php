<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipment\CreateShipmentCollection;
use Mirakl\MMP\Common\Domain\Shipment\CreatedShipments;

/**
 * (ST01) Create shipments (limited to 1000 shipments at a time)
 *
 * @method  CreateShipmentCollection    getShipments()
 * @method  $this                       setShipments(array|CreateShipmentCollection $createShipments)
 */
abstract class AbstractCreateShipmentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/shipments';

    /**
     * @var array
     */
    public $bodyParams = ['shipments'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipments' => [CreateShipmentCollection::class, 'create'],
    ];

    /**
     * @param   array|CreateShipmentCollection  $createShipments
     */
    public function __construct($createShipments)
    {
        parent::__construct();
        $this->setShipments($createShipments);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedShipments::decorator();
    }
}