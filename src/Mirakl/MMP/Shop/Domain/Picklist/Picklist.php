<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Picklist;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Picklist\PicklistLineCollection;
use Mirakl\MMP\Shop\Domain\Collection\Picklist\PicklistOrderLineCollection;

/**
 * @method string                      getId()
 * @method $this                       setId(string $id)
 * @method \DateTime                   getDateCreated()
 * @method $this                       setDateCreated(\DateTime $dateCreated)
 * @method \DateTime                   getLastUpdated()
 * @method $this                       setLastUpdated(\DateTime $lastUpdated)
 * @method PicklistOrderLineCollection getOrderLines()
 * @method $this                       setOrderLines(array|PicklistOrderLineCollection $orderLines)
 * @method string                      getPickrunCode()
 * @method $this                       setPickrunCode(string $pickrunCode)
 * @method \DateTime                   getPickupDate()
 * @method $this                       setPickupDate(\DateTime $pickupDate)
 * @method PicklistLineCollection      getPicklistLines()
 * @method $this                       setPicklistLines(array|PicklistLineCollection $picklistLines)
 * @method int                         getShopUuid()
 * @method $this                       setShopUuid(int $shopUuid)
 * @method string                      getState() One of NOTHING_TO_PREPARE, WAITING_PREPARATION, IN_PREPARATION, READY_FOR_PICKUP, CLOSED
 * @method $this                       setState(string $shopUuid)
 */
class Picklist extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shop_id' => 'shop_uuid',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines'    => [PicklistOrderLineCollection::class, 'create'],
        'picklist_lines' => [PicklistLineCollection::class, 'create'],
    ];
}
