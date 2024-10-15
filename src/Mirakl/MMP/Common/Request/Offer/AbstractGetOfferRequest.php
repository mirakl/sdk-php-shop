<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer;

use Mirakl\Core\Domain\LocalizableTrait;

/**
 * (OF22) Get information of an offer
 *
 * @method string getPricingChannelCode()
 * @method $this  setPricingChannelCode(string $pricingChannelCode)
 * @method string getPricingCustomerOrganizationId()
 * @method $this  setPricingCustomerOrganizationId(string $pricingCustomerOrganizationId)
 */
abstract class AbstractGetOfferRequest extends AbstractOfferRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/{offer}';

    /**
     * @var array
     */
    public $queryParams = ['pricing_channel_code', 'pricing_customer_organization_id'];
}
