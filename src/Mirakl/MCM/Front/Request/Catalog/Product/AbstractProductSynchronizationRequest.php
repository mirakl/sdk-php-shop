<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\Core\Request\AbstractRequest;

/**
 * @method string getTrackingId()
 * @method string setTrackingId(string $trackingId)
 */
abstract class AbstractProductSynchronizationRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{tracking_id}' => 'tracking_id'
    ];

    /**
     * @param   string  $trackingId
     */
    public function __construct($trackingId)
    {
        parent::__construct();
        $this->setTrackingId($trackingId);
    }
}