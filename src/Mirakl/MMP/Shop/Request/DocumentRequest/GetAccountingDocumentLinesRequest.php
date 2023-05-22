<?php
namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\MMP\OperatorShop\Request\DocumentRequest\AbstractGetAccountingDocumentLinesRequest;

/**
 * (DR12) Get document request lines
 *
 * Sort by creation date (desc by default)
 * This API uses pagination by default and will return 50 documents request lines
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\DocumentRequest\GetAccountingDocumentLinesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $documentRequestId = '681ab1e8-5e70-49b6-9489-36e766d64328';
 * $request = new GetAccountingDocumentLinesRequest($documentRequestId);
 *
 * $result = $api->getAccountingDocumentLinesRequests($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 * $collection = $result->getCollection();
 * // $collection => @see \Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\DocumentRequestLineResponseCollection
 *
 * // Get next results with token from response:
 * $request = new GetAccountingDocumentLinesRequest($documentRequestId);
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getAccountingDocumentLinesRequests($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 * </code>
 */
class GetAccountingDocumentLinesRequest extends AbstractGetAccountingDocumentLinesRequest
{}