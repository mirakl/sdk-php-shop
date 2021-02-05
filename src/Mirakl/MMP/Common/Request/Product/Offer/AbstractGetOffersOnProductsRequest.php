<?php
namespace Mirakl\MMP\Common\Request\Product\Offer;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\ProductReferencesTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (P11) List offers for each product given
 *
 * This API uses pagination by default and will return 10 offers
 * Result can be sort with bestPrice or bestEvaluation @see AbstractGetOffersOnProductsRequest
 *
 * @method  bool    getAllChannels()
 * @method  $this   setAllChannels(bool $flag)
 * @method  bool    getAllOffers()
 * @method  $this   setAllOffers(bool $flag)
 * @method  array   getChannelCodes()
 * @method  $this   setChannelCodes(array $channelCodes)
 * @method  array   getOfferStateCodes()
 * @method  $this   setOfferStateCodes(array $offerStateCodes)
 * @method  string  getPricingChannelCode()
 * @method  $this   setPricingChannelCode(string $pricingChannelCode)
 * @method  array   getProductIds()
 * @method  $this   setProductIds(array $productIds)
 */
abstract class AbstractGetOffersOnProductsRequest extends AbstractRequest
{
    use PageableTrait;
    use SortableTrait;
    use ProductReferencesTrait;
    use LocalizableTrait;

    // (DEFAULT) Sort by product sku and then by total price, premium information, shop grade
    const SORT_BY_BEST_PRICE = 'bestPrice';

    // Sort by product sku and then by shop grade, total price, premium information
    const SORT_BY_BEST_EVALUATION = 'bestEvaluation';

    // Sort by product sku and then by shop grade, total price, premium information
    const SORT_BY_OFFER_RANKING = 'offerRanking';

    /**
     * @var string
     */
    protected $endpoint = '/products/offers';

    /**
     * @param   array   $productIds
     * @param   array   $offerStateCodes
     */
    public function __construct(array $productIds = null, array $offerStateCodes = null)
    {
        parent::__construct();
        $this->setProductIds($productIds);
        $this->setOfferStateCodes($offerStateCodes);
    }

    /**
     * @var array
     */
    public $queryParams = [
        'product_ids',
        'offer_state_codes',
        'all_offers',
        'channel_codes',
        'all_channels',
        'product_references',
        'pricing_channel_code',
    ];
}
