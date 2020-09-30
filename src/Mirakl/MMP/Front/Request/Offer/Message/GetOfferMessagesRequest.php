<?php
namespace Mirakl\MMP\Front\Request\Offer\Message;

use Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection;
use Mirakl\MMP\Front\Request\Message\AbstractFrontGetMessagesRequest;

/**
 * (OF41) (M01 is used instead) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 *
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Offer\Message\GetOfferMessagesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetOfferMessagesRequest('OFFER_ID');
 * $result = $api->getOfferMessages($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection
 * </code>
 */
class GetOfferMessagesRequest extends AbstractFrontGetMessagesRequest
{
    /**
     * @param   string  $offerId
     */
    public function __construct($offerId)
    {
        parent::__construct();
        $this->setOfferId($offerId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OfferMessageCollection::decorator('messages');
    }
}