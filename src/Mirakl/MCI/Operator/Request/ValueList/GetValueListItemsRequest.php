<?php
namespace Mirakl\MCI\Operator\Request\ValueList;

use Mirakl\MCI\Common\Request\ValueList\AbstractGetValueListItemsRequest;

/**
 * (PM31) Get value list items
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\ValueList\GetValueListItemsRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetValueListItemsRequest('COLOR');
 * $result = $api->getValueListItems($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\ValueList
 * </code>
 */
class GetValueListItemsRequest extends AbstractGetValueListItemsRequest
{}