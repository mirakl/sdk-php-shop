<?php
namespace Mirakl\Core\Client;

/**
 * @property $queryParams array
 */
trait ShopApiClientTrait
{
    /**
     * @return  $this
     */
    public function getShopId()
    {
        return isset($this->queryParams['shop_id']) ? $this->queryParams['shop_id'] : null;
    }

    /**
     * Handle shop_id global query parameter
     *
     * @param   string  $shopId
     * @return  $this
     */
    public function setShopId($shopId)
    {
        $this->queryParams['shop_id'] = $shopId;

        return $this;
    }
}
