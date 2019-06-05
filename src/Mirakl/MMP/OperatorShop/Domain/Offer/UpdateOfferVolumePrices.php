<?php
namespace Mirakl\MMP\OperatorShop\Domain\Offer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  int     getQuantityThreshold()
 * @method  $this   setQuantityThreshold(int $quantityThreshold)
 * @method  float   getUnitOriginPrice()
 * @method  $this   setUnitOriginPrice(float $unitOriginPrice)
 * @method  float   getUnitDiscountPrice()
 * @method  $this   setUnitDiscountPrice(float $discountStartDate)
 */
class UpdateOfferVolumePrices extends MiraklObject
{
    /**
     * @param   float   $unitOriginPrice
     * @param   float   $unitDiscountPrice
     * @param   int     $quantityThreshold
     */
    public function __construct($unitOriginPrice, $unitDiscountPrice, $quantityThreshold)
    {
        parent::__construct();

        $this->setUnitOriginPrice($unitOriginPrice);
        $this->setUnitDiscountPrice($unitDiscountPrice);
        $this->setQuantityThreshold($quantityThreshold);
    }
}
