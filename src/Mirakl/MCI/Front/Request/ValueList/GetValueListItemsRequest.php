<?php
namespace Mirakl\MCI\Front\Request\ValueList;

use Mirakl\MCI\Common\Request\ValueList\AbstractGetValueListItemsRequest;

/**
 * (PM31) Get value list items
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\ValueList\GetValueListItemsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetValueListItemsRequest('COLOR');
 * $result = $api->getValueListItems($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\ValueList
 * </code>
 */
class GetValueListItemsRequest extends AbstractGetValueListItemsRequest
{}