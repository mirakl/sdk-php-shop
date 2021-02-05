<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\MMP\OperatorShop\Request\Offer\AbstractUpdateOffersRequest;

/**
 * (OF24) Update offers
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\UpdateOffersRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new UpdateOffersRequest('SHOP_ID');
 * $request->setOffers([
 *     'shop_sku' => 'AAPL-CHASAW7852',
 *     'description' => 'never used',
 * ]);
 * $result = $api->updateOffers($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking
 * </code>
 */
class UpdateOffersRequest extends AbstractUpdateOffersRequest
{}