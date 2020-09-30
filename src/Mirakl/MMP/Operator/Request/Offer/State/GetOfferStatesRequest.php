<?php
namespace Mirakl\MMP\Operator\Request\Offer\State;

use Mirakl\MMP\Common\Request\Offer\State\AbstractGetOfferStatesRequest;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $result = $api->getOfferStates();
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Offer\State\OfferStateCollection
 * </code>
 *
 * @deprecated  Class deprecated since 1.6.0
 * @see         \Mirakl\MMP\Operator\Request\Offer\State\GetOfferStateListRequest
 */
class GetOfferStatesRequest extends AbstractGetOfferStatesRequest
{}