<?php
namespace Mirakl\MMP\Shop\Request\Offer\State;

use Mirakl\MMP\Common\Request\Offer\State\AbstractGetOfferStatesRequest;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $result = $api->getOfferStates();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Offer\State\OfferStateCollection
 * </code>
 *
 * @deprecated  Class deprecated since 1.6.0
 * @see         \Mirakl\MMP\shop\Request\Offer\State\GetOfferStateListRequest
 */
class GetOfferStatesRequest extends AbstractGetOfferStatesRequest
{}