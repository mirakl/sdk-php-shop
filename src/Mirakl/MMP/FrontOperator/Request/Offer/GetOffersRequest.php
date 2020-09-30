<?php
namespace Mirakl\MMP\FrontOperator\Request\Offer;

use Mirakl\MMP\Common\Request\Offer\AbstractGetOffersRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Offer\OfferCollection;

/**
 * (S04) List offers of a shop
 * This API uses pagination by default and will return 10 offers
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 * @method  array   getProductSkus()
 * @method  $this   setProductSkus(array $productSkus)
 * @method  bool    getAllOffers()
 * @method  $this   setAllOffers(bool $flag)
 * @method  bool    isAllOffers()
 * 
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Offer\GetOffersRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetOffersRequest('SHOP_ID');
 * $request->setProductSkus(['PRODUCT_SKU']); // Optional
 * $request->setAllOffers(true); // Optional
 * $request->setOfferStateCodes(['OFFER_STATE']); // Optional
 * $request->setFavorite(true); // Optional
 * $result = $api->getOffers($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Offer\OfferCollection
 * </code>

 */
class GetOffersRequest extends AbstractGetOffersRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/{shop}/offers';

    /**
     * @var array
     */
    protected $uriVars = [
        '{shop}' => 'shop_id'
    ];

    /**
     * @var array
     */
    public $queryParams = ['shop_id', 'product_skus', 'all_offers', 'offer_state_codes', 'favorite', 'pricing_channel_code'];

    /**
     * @param   string  $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();
        $this->setShopId($shopId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferCollection::decorator('offers');
    }
}