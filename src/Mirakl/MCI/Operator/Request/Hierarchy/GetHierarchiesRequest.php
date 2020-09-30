<?php
namespace Mirakl\MCI\Operator\Request\Hierarchy;

use Mirakl\MCI\Common\Request\Hierarchy\AbstractGetHierarchiesRequest;

/**
 * (H11) List hierarchies related (parents and children) to the given hierarchy
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Operator\Client\OperatorApiClient;
 * use Mirakl\MCI\Operator\Request\Hierarchy\GetHierarchiesRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetHierarchiesRequest();
 * $request->setHierarchyCode('HIERARCHY_CODE'); // Optional
 * $request->setMaxLevel(2); // Optional (all children by default)
 * $result = $api->getHierarchies($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\HierarchyCollection
 * </code>
 */
class GetHierarchiesRequest extends AbstractGetHierarchiesRequest
{}