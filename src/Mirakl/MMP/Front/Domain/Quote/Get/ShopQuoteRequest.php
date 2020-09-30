<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Message\QuoteRequestMessageCollection;

/**
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyCode)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  QuoteRequestMessageCollection   getMessages()
 * @method  $this                           setMessages(array|QuoteRequestMessageCollection $messages)
 * @method  QuoteCollection                 getQuotes()
 * @method  $this                           setQuotes(array|QuoteCollection $quotes)
 * @method  string                          getShopId()
 * @method  $this                           setShopId(string $shopId)
 * @method  string                          getState()
 * @method  $this                           setState(string $state)
 */
class ShopQuoteRequest extends MiraklObject
{
    /**
     * Waiting to be scored by front
     * Unavailable to shop(s) at this point
     */
    const STAGING = 'STAGING';

    /**
     * FINAL STATE
     * front has invalidated the customer's paying information
     */
    const STAGING_KO = 'STAGING_KO';

    /**
     * Initial state once the {@link MiraklQuoteRequest} is scored, stays here until shop replies
     */
    const TO_PROCESS = 'TO_PROCESS';

    /**
     * Second stage of the Quote Request for this shop: the shop has acknowledged and answered to this request, by
     * either writing a message or submitting a quote to the customer
     */
    const IN_PROGRESS = 'IN_PROGRESS';

    /**
     * FINAL STATE
     * Once the Quote Request for this shop is inactive (no messages AND no currently valid quotes) for a period of time
     * set by operator.
     * Set to this state by batch
     */
    const EXPIRED = 'EXPIRED';

    /**
     * FINAL STATE
     * Customer has accepted one quote from this shop, every other quotes -from this shop- will be closed as a result
     */
    const ACCEPTED = 'ACCEPTED';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'messages' => [QuoteRequestMessageCollection::class, 'create'],
        'quotes'   => [QuoteCollection::class, 'create'],
    ];
}