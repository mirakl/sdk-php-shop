<?php
namespace Mirakl\MMP\OperatorShop\Request\Offer\Message;

use Mirakl\MMP\Common\Domain\Collection\Message\OfferMessageCollection;
use Mirakl\MMP\Common\Request\Message\AbstractGetMessagesRequest;

/**
 * (M01) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 *
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 */
abstract class AbstractGetOfferMessagesRequest extends AbstractGetMessagesRequest
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