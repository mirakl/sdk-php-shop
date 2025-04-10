<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Product\Offer;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\ProductReferencesTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (P11) List offers for each product given
 * This API uses pagination by default and will return 10 offers
 * Result can be sort with bestPrice or bestEvaluation @see AbstractGetOffersOnProductsRequest
 *
 * @method bool     getAllChannels()
 * @method $this    setAllChannels(bool $flag)
 * @method bool     getAllOffers()
 * @method $this    setAllOffers(bool $flag)
 * @method bool     getAllShippingZones()
 * @method $this    setAllShippingZones(bool $allShippingZones) If false (default), filters the offers with the given shipping zones or all shop shipping zones if no shipping zones are given.
 *                                                              If true, selects all shop shipping zones and ignores the provided shipping_zones.
 * @method string[] getChannelCodes()
 * @method $this    setChannelCodes(string[] $channelCodes)
 * @method string[] getOfferStateCodes()
 * @method $this    setOfferStateCodes(string[] $offerStateCodes)
 * @method string   getPricingChannelCode()
 * @method $this    setPricingChannelCode(string $pricingChannelCode)
 * @method string   getPricingCustomerOrganizationId()
 * @method $this    setPricingCustomerOrganizationId(string $pricingCustomerOrganizationId)
 * @method string[] getProductIds()
 * @method $this    setProductIds(string[] $productIds)
 * @method string[] getShippingZones()
 * @method $this    setShippingZones(string[] $shippingZones)
 */
abstract class AbstractGetOffersOnProductsRequest extends AbstractRequest
{
    use PageableTrait;
    use SortableTrait;
    use ProductReferencesTrait;
    use LocalizableTrait;

    // (DEFAULT) Sort by product sku and then by total price, premium information, shop grade
    public const SORT_BY_BEST_PRICE = 'bestPrice';

    // Sort by product sku and then by shop grade, total price, premium information
    public const SORT_BY_BEST_EVALUATION = 'bestEvaluation';

    // Sort by product sku and then by shop grade, total price, premium information
    public const SORT_BY_OFFER_RANKING = 'offerRanking';

    /**
     * @var string
     */
    protected $endpoint = '/products/offers';

    /**
     * @var array
     */
    public $queryParams = [
        'all_channels',
        'all_offers',
        'all_shipping_zones',
        'channel_codes',
        'offer_state_codes',
        'pricing_channel_code',
        'pricing_customer_organization_id',
        'product_ids',
        'product_references',
        'shipping_zones',
    ];

    /**
     * @param array|null $productIds
     * @param array|null $offerStateCodes
     */
    public function __construct(?array $productIds = null, ?array $offerStateCodes = null)
    {
        parent::__construct();

        $this->setProductIds($productIds);

        if (null !== $offerStateCodes) {
            $this->setOfferStateCodes($offerStateCodes);
        }
    }
}
