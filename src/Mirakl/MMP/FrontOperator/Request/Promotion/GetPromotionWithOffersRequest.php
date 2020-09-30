<?php
namespace Mirakl\MMP\FrontOperator\Request\Promotion;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionWithOffers;

/**
 * (PR02) Get a promotion's details, including a list of the active offers associated with this promotion
 *
 * @method  string  getPricingChannelCode()
 * @method  $this   setPricingChannelCode(string $pricingChannelCode)
 * @method  int     getPromotionInternalId()
 * @method  $this   setPromotionInternalId(int $promotionIdentifierId)
 * @method  string  getOfferType()
 * @method  $this   setOfferType(string $offerType)
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\AdditionalFieldValue;
 * use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Offer;
 * use Mirakl\MMP\FrontOperator\Request\Promotion\GetPromotionWithOffersRequest;
 *
 * $request = new GetPromotionWithOffersRequest('123L','GOOD_SUMMER_BARGAIN_2017');
 *
 * $request->setOfferType(GetPromotionWithOffersRequest::OFFER_TYPE_REWARD)
 *   ->setLocale('fr_FR')
 *   ->setOffset(1)
 *   ->setMax(5)
 *   ->setPricingChannelCode('WEB')
 *   ->setSortBy('productTitle')
 *   ->sortDesc();
 * $result = $api->getPromotionWithOffers($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionWithOffers;
 * </code>
 */
class GetPromotionWithOffersRequest extends AbstractRequest
{
    use LocalizableTrait;
    use PageableTrait;
    use SortableTrait;

    /**
     * (DEFAULT) Wanted offer promotion type ALL
     */
    const OFFER_TYPE_ALL = 'ALL';

    /**
     * Wanted offer promotion type REWARD
     */
    const OFFER_TYPE_REWARD = 'REWARD';

    /**
     * Wanted offer promotion type TRIGGER
     */
    const OFFER_TYPE_TRIGGER = 'TRIGGER';

    /**
     * @var string
     */
    protected $endpoint = '/promotions/{shop_id}/{promotion_internal_id}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{shop_id}' => 'shop_id',
        '{promotion_internal_id}' => 'promotion_internal_id'
    ];

    /**
     * @var array
     */
    public $queryParams = ['offer_type', 'pricing_channel_code', 'locale'];

    /**
     * @param   string  $shopId
     * @param   int     $promotionInternalId
     */
    public function __construct($shopId, $promotionInternalId)
    {
        parent::__construct();
        $this->setShopId($shopId);
        $this->setPromotionInternalId($promotionInternalId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return PromotionWithOffers::decorator();
    }
}