<?php
namespace Mirakl\MCI\Operator\Request\ValueList;

use Mirakl\MCI\Common\Request\ValueList\AbstractGetValueListsItemsRequest;

/**
 * (VL11) Get operator's value lists
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\ValueList\GetValueListsItemsRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetValueListsItemsRequest();
 * $result = $api->getValueListsItems($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\ValueLists
 * </code>
 */
class GetValueListsItemsRequest extends AbstractGetValueListsItemsRequest
{}