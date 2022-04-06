<?php
namespace Mirakl\MMP\Shop\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOffersImportsRequest;

/**
 * (OF04) Get offer imports information and stats
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Importer\OffersImportsRequest;
 * use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportMode;
 * use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportOrigin;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new OffersImportsRequest();
 * $request->setOrigins([ImportOrigin::API, ImportOrigin::FRONT]);
 * $request->setMode(ImportMode::PARTIAL_UPDATE);
 *
 * $result = $api->getOffersImports($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 * $collection = $result->getCollection();
 * // $collection => @see \Mirakl\MMP\OperatorShop\Domain\Collection\Order\Importer\OfferImportCollection
 *
 * // Get next results with token from response:
 * $request = new OffersImportsRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getOffersImports($request);
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
 * </code>
 */
class OffersImportsRequest extends AbstractOffersImportsRequest
{}