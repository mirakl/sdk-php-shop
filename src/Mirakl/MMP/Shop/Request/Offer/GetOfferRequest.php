<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\MMP\Common\Request\Offer\AbstractGetOfferRequest;
use Mirakl\MMP\Shop\Domain\Offer\ShopOffer;

/**
 * (OF22) Get information of an offer
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\GetOfferRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOfferRequest('OFFER_ID');
 * $result = $api->getOffer($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Offer\ShopOffer
 * </code>
 */
class GetOfferRequest extends AbstractGetOfferRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopOffer::decorator();
    }
}