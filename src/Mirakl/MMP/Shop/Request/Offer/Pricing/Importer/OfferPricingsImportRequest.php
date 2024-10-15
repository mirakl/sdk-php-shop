<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Pricing\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Pricing\Importer\AbstractOfferPricingsImportRequest;

/**
 * (PRI01) Import a price file
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Pricing\Importer\OfferPricingsImportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $csv = <<<CSV
 * offer-sku;price;price-ranges;discount-price;discount-ranges;discount-start-date;discount-end-date
 * SKU001;20;1|20,10|15;18;1|18,10|12;2024-01-01T23:00:00Z;2024-06-30T23:00:00Z
 * CSV;
 *
 * $request = new OfferPricingsImportRequest($csv, 2000);
 *
 * $result = $api->importOfferPricings($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Pricing\Importer\OfferPricingsImportTracking;
 * </code>
 */
class OfferPricingsImportRequest extends AbstractOfferPricingsImportRequest
{
}
