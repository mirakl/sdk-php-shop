<?php
namespace Mirakl\MCI\Shop\Request\ValueList;

use Mirakl\MCI\Common\Request\ValueList\AbstractGetValueListsItemsRequest;

/**
 * (VL11) Get operator's value lists
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\ValueList\GetValueListsItemsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetValueListsItemsRequest();
 * $result = $api->getValueListsItems($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\ValueLists
 * </code>
 */
class GetValueListsItemsRequest extends AbstractGetValueListsItemsRequest
{}