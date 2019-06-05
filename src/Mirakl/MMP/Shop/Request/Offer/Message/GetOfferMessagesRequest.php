<?php
namespace Mirakl\MMP\Shop\Request\Offer\Message;

use Mirakl\MMP\OperatorShop\Request\Offer\Message\AbstractGetOfferMessagesRequest;

/**
 * (M01) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Message\GetOfferMessagesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOfferMessagesRequest('OFFER_ID');
 * $result = $api->getOfferMessages($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection
 * </code>
 */
class GetOfferMessagesRequest extends AbstractGetOfferMessagesRequest
{}