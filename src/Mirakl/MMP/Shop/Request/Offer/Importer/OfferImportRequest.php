<?php
namespace Mirakl\MMP\Shop\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportRequest;

/**
 * (OF01) Import offers
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\Importer\OfferImportRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY');
 * $file = new \SplFileObject('/path/to/file.csv');
 * $request = new OfferImportRequest($file);
 * $request->setImportMode(\Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportMode::PARTIAL_UPDATE); // Optional
 * $request->setWithProducts(true); // Optional
 * $result = $api->importOffers($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportTracking
 * </code>
 */
class OfferImportRequest extends AbstractOfferImportRequest
{}