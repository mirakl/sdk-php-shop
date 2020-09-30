<?php
namespace Mirakl\MCI\Operator\Request\Attribute;

use Mirakl\MCI\Common\Request\Attribute\AbstractGetAttributesRequest;

/**
 * (PM11) Get attributes configuration
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Attribute\GetAttributesRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetAttributesRequest();
 * $request->setHierarchyCode('HIERARCHY_CODE'); // Optional
 * $request->setMaxLevel(2); // Optional (all children by default)
 * $result = $api->getAttributes($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\AttributeCollection
 * </code>
 */
class GetAttributesRequest extends AbstractGetAttributesRequest
{}