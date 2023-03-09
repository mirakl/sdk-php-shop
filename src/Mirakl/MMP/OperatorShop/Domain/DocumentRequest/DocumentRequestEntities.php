<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                 getShipToIsoCountryCode()
 * @method $this                  setShipToIsoCountryCode(string $shipToIsoCountryCode)
 * @method ShopBillingCycleEntity getShopBillingCycle()
 * @method $this                  setShopBillingCycle(ShopBillingCycleEntity|array $shopBillingCycle)
 */
class DocumentRequestEntities extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shop_billing_cycle' => [ShopBillingCycleEntity::class, 'create']
    ];
}