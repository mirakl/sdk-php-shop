<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteLineCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteOrderInformationCollection;

/**
 * @method  \DateTime                       getDateCreated()
 * @method  $this                           setDateCreated(\DateTime $dateCreated)
 * @method  \DateTime                       getExpirationDate()
 * @method  $this                           setExpirationDate(\DateTime $expirationDate)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  QuoteLineCollection             getLines()
 * @method  $this                           setLines(array|QuoteLineCollection $quoteLineCollection)
 * @method  QuoteOrderInformationCollection getOrders()
 * @method  $this                           setOrders(array|QuoteOrderInformationCollection $orders)
 * @method  QuotePriceSummary               getPriceSummary()
 * @method  $this                           setPriceSummary(array|QuotePriceSummary $priceSummary)
 * @method  string                          getState()
 * @method  $this                           setState(string $state)
 */
class Quote extends MiraklObject
{
    // Original quote from user, never used
    const INITIAL  = 'INITIAL';

    // Quote finalized by shop and pending acceptance from customer
    const ISSUED   = 'ISSUED';

    // Quote accepted by the customer
    const ACCEPTED = 'ACCEPTED';

    // Quote has passed its validity period
    const EXPIRED  = 'EXPIRED';

    /**
     * @var array
     */
    protected static $mapping = [
        'price'            => 'price_summary/price',
        'shipping_price'   => 'price_summary/shipping_price',
        'total_commission' => 'price_summary/total_commission',
        'total_price'      => 'price_summary/total_price',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'lines'         => [QuoteLineCollection::class, 'create'],
        'orders'        => [QuoteOrderInformationCollection::class, 'create'],
        'price_summary' => [QuotePriceSummary::class, 'create'],
    ];
}