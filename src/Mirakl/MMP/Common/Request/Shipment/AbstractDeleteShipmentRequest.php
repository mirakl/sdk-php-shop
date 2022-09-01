<?php
namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Shipment\DeleteShipmentCollection;
use Mirakl\MMP\Common\Domain\Shipment\DeletedShipments;

/**
 * (ST06) Delete shipments in shipping status
 *
 * @method  DeleteShipmentCollection getShipments()
 * @method  $this                    setShipments(array|DeleteShipmentCollection $deleteShipments)
 */
abstract class AbstractDeleteShipmentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/shipments/delete';

    /**
     * @var array
     */
    public $bodyParams = ['shipments'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipments' => [DeleteShipmentCollection::class, 'create'],
    ];

    /**
     * @param array|DeleteShipmentCollection  $deleteShipments
     */
    public function __construct($deleteShipments)
    {
        parent::__construct();
        $this->setShipments($deleteShipments);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return DeletedShipments::decorator();
    }
}