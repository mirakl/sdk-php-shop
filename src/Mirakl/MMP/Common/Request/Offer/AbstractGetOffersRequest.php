<?php
namespace Mirakl\MMP\Common\Request\Offer;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * @method  bool    getFavorite()
 * @method  $this   setFavorite(bool $flag)
 * @method  bool    isFavorite()
 * @method  array   getOfferStateCodes()
 * @method  $this   setOfferStateCodes(array $offerStateCodes)
 * @method  string  getPricingChannelCode()
 * @method  $this   setPricingChannelCode(string $pricingChannelCode)
 */
abstract class AbstractGetOffersRequest extends AbstractRequest
{
    use SortableTrait;
    use PageableTrait;
    use LocalizableTrait;

    /**
     * (DEFAULT) Sort by total price
     */
    const SORT_BY_TOTAL_PRICE   = 'totalPrice';

    /**
     * Sort by price, total price
     */
    const SORT_BY_PRICE         = 'price';

    /**
     * Sort by product title, total price
     */
    const SORT_BY_PRODUCT_TITLE = 'productTitle';

    /**
     * @var array
     */
    public $queryParams = ['offer_state_codes', 'favorite', 'pricing_channel_code'];
}