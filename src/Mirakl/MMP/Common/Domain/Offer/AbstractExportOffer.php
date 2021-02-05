<?php
namespace Mirakl\MMP\Common\Domain\Offer;

use Mirakl\MMP\Common\Domain\Collection\Offer\Price\OfferPricesCollection;

/**
 * @method  bool    getDeleted()
 * @method  $this   setDeleted(bool $flag)
 * @method  bool    isDeleted()
 * @method  $this   setId(string $id)
 * @method  string  getLogisticClassCode()
 * @method  $this   setLogisticClassCode(string $logisticClassCode)
 * @method  int     getMaxOrderQuantity()
 * @method  $this   setMaxOrderQuantity(int $maxOrderQuantity)
 * @method  int     getMinOrderQuantity()
 * @method  $this   setMinOrderQuantity(int $minOrderQuantity)
 * @method  int     getMinQuantityAlert()
 * @method  $this   setMinQuantityAlert(int $minQuantityAlert)
 * @method  string  getProductSku()
 * @method  $this   setProductSku(string $sku)
 * @method  int     getPackageQuantity()
 * @method  $this   setPackageQuantity(int $packageQuantity)
 */
abstract class AbstractExportOffer extends AbstractOfferWithShopInfo
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer-id'                      => 'offer_id',
        'product-sku'                   => 'product/sku',
        'min-shipping-price'            => 'min_shipping/price',
        'min-shipping-price-additional' => 'min_shipping/price_additional',
        'min-shipping-zone'             => 'min_shipping/zone_code',
        'min-shipping-type'             => 'min_shipping/type_code',
        'total-price'                   => 'total_price',
        'price-additional-info'         => 'price_additional_info',
        'state-code'                    => 'state_code',
        'shop-id'                       => 'shop_id',
        'shop-name'                     => 'shop_name',
        'logistic-class'                => 'logistic_class_code',
        'favorite-rank'                 => 'favorite_rank',
        'origin-price'                  => 'discount/origin_price',
        'discount-start-date'           => 'discount/start_date',
        'discount-end-date'             => 'discount/end_date',
        'available-start-date'          => 'availability/start_date',
        'available-end-date'            => 'availability/end_date',
        'allow-quote-requests'          => 'allow_quote_requests',
        'discount-price'                => 'discount/discount_price',
        'discount-ranges'               => 'discount/ranges',
        'price-ranges'                  => 'price_ranges',
        'currency-iso-code'             => 'currency_iso_code',
        'leadtime-to-ship'              => 'leadtime_to_ship',
        'eco-tax'                       => 'eco_tax',
        'product-tax-code'              => 'product_tax_code',
        'min-order-quantity'            => 'min_order_quantity',
        'max-order-quantity'            => 'max_order_quantity',
        'package-quantity'              => 'package_quantity',
    ];

    /**
     * @var array
     */
    protected static $offerPricingFields = [
        'price'               => 'price',
        'origin-price'        => 'unit_origin_price',
        'price-ranges'        => 'price_ranges',
        'discount-price'      => 'unit_discount_price',
        'discount-start-date' => 'discount_start_date',
        'discount-end-date'   => 'discount_end_date',
        'discount-ranges'     => 'discount_ranges',
    ];

    /**
     * Return origin price directly from offer to keep backwards compatibility
     *
     * @deprecated use getDiscount()->getOriginPrice()
     * @return  float
     */
    public function getOriginPrice()
    {
        if ($discount = $this->getDiscount()) {
            return $discount->getOriginPrice();
        }

        return $this->getPrice();
    }

    /**
     * @param   array       $data
     * @param   string|null $channelCode
     * @return  array|null
     */
    protected function getOfferPricingData($data, $channelCode = null)
    {
        // Collect original / channel data
        $offerPricing = [];
        foreach (self::$offerPricingFields as $column => $field) {
            if ($channelCode) {
                $column = sprintf('%s[channel=%s]', $column, $channelCode);
            }
            if (!empty($data[$column])) {
                $offerPricing[$field] = $data[$column];
            }
        }

        if (!count($offerPricing)) {
            return null;
        }

        $offerPricing['channel_code'] = $channelCode;

        // Merge price-ranges & discount-ranges for having volume pricing
        $volumePrices = [];
        $addPriceRange = function ($type, $field) use (&$offerPricing, &$volumePrices) {
            if (isset($offerPricing[$field]) && $offerPricing[$field]) {
                foreach (explode(',', $offerPricing[$field]) as $range) {
                    list ($qty, $price) = explode('|', $range);
                    if (!isset($volumePrices[$qty])) {
                        $volumePrices[$qty] = ['quantity_threshold' => $qty];
                    }
                    $volumePrices[$qty][$type] = $price;
                }
            }
            unset($offerPricing[$field]);
        };

        $addPriceRange('unit_origin_price', 'price_ranges');
        $addPriceRange('unit_discount_price', 'discount_ranges');

        $offerPricing['volume_prices'] = array_values($volumePrices);

        return $offerPricing;
    }

    /**
     * @inheritdoc
     */
    public function setData($key, $value = null)
    {
        parent::setData($key, $value);

        if (!is_array($key)) {
            return $this;
        }

        $allPrices = new OfferPricesCollection();

        $channels = array_merge([null], $this->getChannels());
        foreach ($channels as $channel) {
            if ($offerPricing = $this->getOfferPricingData($key, $channel)) {
                $allPrices->add($offerPricing);
            }
        }
        $this->setAllPrices($allPrices);

        return $this;
    }
}
