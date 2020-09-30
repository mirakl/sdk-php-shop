<?php
namespace Mirakl\MMP\FrontOperator\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 * @method  string  getPromotionId()
 * @method  $this   setPromotionId(string $promotionId)
 */
class PromotionIdentifier extends MiraklObject
{
    /**
     * @param   string  $shopId
     * @param   string  $promotionId
     */
    public function __construct($shopId, $promotionId)
    {
        parent::__construct();
        $this->setShopId($shopId);
        $this->setPromotionId($promotionId);
    }
}