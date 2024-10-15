<?php

declare(strict_types=1);

namespace Mirakl\Core\Request;

/**
 * @method string getTrackingId()
 * @method $this  setTrackingId(string $trackingId)
 */
abstract class AbstractTrackingRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{tracking_id}' => 'tracking_id'
    ];

    /**
     * @param string $trackingId
     */
    public function __construct($trackingId)
    {
        parent::__construct();

        $this->setTrackingId($trackingId);
    }
}
