<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Pricing\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Stock\Importer\AbstractOfferStocksImportRequest;

/**
 * (STO01) Import a stock file
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Stock\Importer\OfferStocksImportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $csv = <<<CSV
 * offer-sku;quantity;warehouse-code;update-delete
 * SKU001;20;1;UPDATE
 * CSV;
 *
 * $request = new OfferStocksImportRequest($csv, 2000);
 *
 * $result = $api->importOfferStocks($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Stock\Importer\OfferStocksImportTracking;
 * </code>
 */
class OfferStocksImportRequest extends AbstractOfferStocksImportRequest
{
}
