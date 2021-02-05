<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\MMP\Common\Request\Offer\AbstractOffersExportFileRequest;

/**
 * (OF51) Get a CSV file with the offers updated and deleted since the last request date
 *
 * <p>
 * If offers have additional fields, a column is added at the end of csv for each existing
 * additional field with as header the code of the additional field.
 * </p>
 * <p>
 * Returns CSV diff file with:
 * offer-id;product-sku;min-shipping-price;min-shipping-price-additional;
 * min-shipping-zone;min-shipping-type;price;total-price;price-additional-info;quantity;description;
 * state-code;shop-id;shop-name;professional;premium;logistic-class;active;favorite-rank;channels;
 * deleted;origin-price;discount-start-date;discount-end-date;available-start-date;available-end-date;currency-iso-code
 * </p>
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\OffersExportFileRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new OffersExportFileRequest();
 * $request->setIncludeInactiveOffers(true);
 *
 * $result = $api->exportOffersToFile($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper;
 *
 * </code>
 */
class OffersExportFileRequest extends AbstractOffersExportFileRequest
{}