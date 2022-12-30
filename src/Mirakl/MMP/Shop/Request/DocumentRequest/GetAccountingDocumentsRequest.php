<?php
namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\MMP\OperatorShop\Request\DocumentRequest\AbstractGetAccountingDocumentsRequest;

/**
 * (DR11) Get order-related accounting documents requests
 *
 * Sort by creation date (desc by default)
 * This API uses pagination by default and will return 50 documents requests
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\DocumentRequest\GetAccountingDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetAccountingDocumentsRequest();
 *
 * $result = $api->getAccountingDocumentsRequests($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 * $collection = $result->getCollection();
 * // $collection => @see \Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\AccountingDocumentRequestResponseCollection
 *
 * // Get next results with token from response:
 * $request = new GetAccountingDocumentsRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getAccountingDocumentsRequests($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 * </code>
 */
class GetAccountingDocumentsRequest extends AbstractGetAccountingDocumentsRequest
{}