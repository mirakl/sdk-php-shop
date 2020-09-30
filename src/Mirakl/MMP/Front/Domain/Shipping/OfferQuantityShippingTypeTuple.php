<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  int     getLeadtimeToShip()
 * @method  $this   setLeadtimeToShip(int $leadtimeToShip)
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 * @method  int     getQuantity()
 * @method  $this   setQuantity(int $quantity)
 * @method  string  getShippingTypeCode()
 * @method  $this   setShippingTypeCode(string $shippingTypeCode)
 */
class OfferQuantityShippingTypeTuple extends MiraklObject
{
    /**
     * Need to return exactly 4 elements
     *
     * @return  array
     */
    public function toArray()
    {
        return [
            'offer_id'           => $this->getOfferId(),
            'quantity'           => $this->getQuantity(),
            'shipping_type_code' => $this->getShippingTypeCode(),
            'leadtime_to_ship'   => $this->getLeadtimeToShip(),
        ];
    }
}