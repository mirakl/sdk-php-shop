<?php
namespace Mirakl\MMP\Common\Request\Offer;

/**
 * (OF22) Get information of an offer
 *
 * @method  string  getPricingChannelCode()
 * @method  $this   setPricingChannelCode(string $pricingChannelCode)
 */
abstract class AbstractGetOfferRequest extends AbstractOfferRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/{offer}';

    /**
     * @var array
     */
    public $queryParams = ['pricing_channel_code'];
}