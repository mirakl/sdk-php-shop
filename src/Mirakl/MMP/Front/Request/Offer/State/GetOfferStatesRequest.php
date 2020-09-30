<?php
namespace Mirakl\MMP\Front\Request\Offer\State;

use Mirakl\MMP\Common\Request\Offer\State\AbstractGetOfferStatesRequest;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $result = $api->getOfferStates();
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Offer\State\OfferStateCollection
 * </code>
 *
 * @deprecated  Class deprecated since 1.6.0
 * @see         \Mirakl\MMP\Front\Request\Offer\State\GetOfferStateListRequest
 */
class GetOfferStatesRequest extends AbstractGetOfferStatesRequest
{}