<?php
namespace Mirakl\MCI\Shop\Request\ValueList;

use Mirakl\MCI\Common\Request\ValueList\AbstractGetValueListItemsRequest;

/**
 * (PM31) Get value list items
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\ValueList\GetValueListItemsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetValueListItemsRequest('COLOR');
 * $result = $api->getValueListItems($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\ValueList
 * </code>
 */
class GetValueListItemsRequest extends AbstractGetValueListItemsRequest
{}