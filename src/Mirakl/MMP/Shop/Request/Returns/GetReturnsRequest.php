<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\MMP\Common\Request\Returns\AbstractGetReturnsRequest;

/**
 * (RT11) List returns
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Returns\GetReturnsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetReturnsRequest();
 * $request->setOrderCommercialIds(['ORDER-001']);
 * $request->setOrderLineIds(['ORDER-001-A-1', 'ORDER-001-A-2']);
 *
 * $result = $client->getReturns($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 *
 * // Get next results with token from response:
 * $request = new GetReturnsRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getReturns($request);
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
 * </code>
 */
class GetReturnsRequest extends AbstractGetReturnsRequest
{
}
