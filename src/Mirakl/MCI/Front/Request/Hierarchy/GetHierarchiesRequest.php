<?php
namespace Mirakl\MCI\Front\Request\Hierarchy;

use Mirakl\MCI\Common\Request\Hierarchy\AbstractGetHierarchiesRequest;

/**
 * (H11) List hierarchies related (parents and children) to the given hierarchy
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Hierarchy\GetHierarchiesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetHierarchiesRequest();
 * $request->setHierarchyCode('HIERARCHY_CODE'); // Optional
 * $request->setMaxLevel(2); // Optional (all children by default)
 * $result = $api->getHierarchies($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\HierarchyCollection
 * </code>
 */
class GetHierarchiesRequest extends AbstractGetHierarchiesRequest
{}