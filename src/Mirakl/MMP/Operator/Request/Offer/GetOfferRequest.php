<?php
namespace Mirakl\MMP\Operator\Request\Offer;

use Mirakl\MMP\Common\Request\Offer\AbstractGetOfferRequest;
use Mirakl\MMP\FrontOperator\Domain\Offer;

/**
 * (OF22) Get information of an offer
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Offer\GetOfferRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetOfferRequest('OFFER_ID');
 * $result = $api->getOffer($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Offer
 * </code>
 */
class GetOfferRequest extends AbstractGetOfferRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return Offer::decorator();
    }
}