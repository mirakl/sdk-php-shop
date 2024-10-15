<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Attribute;

use Mirakl\MCI\Common\Request\Attribute\AbstractGetAttributesRequest;

/**
 * (PM11) Get attributes configuration
 *
 * @method bool  getAllOperatorAttributes()
 * @method $this setAllOperatorAttributes(bool $allOperatorAttributes)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Shop\Client\ShopApiClient;
 * use Mirakl\MCI\Shop\Request\Attribute\GetAttributesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetAttributesRequest();
 * $request->setHierarchyCode('HIERARCHY_CODE'); // Optional
 * $request->setMaxLevel(2); // Optional (all children by default)
 * $result = $api->getAttributes($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Collection\AttributeCollection
 * </code>
 */
class GetAttributesRequest extends AbstractGetAttributesRequest
{
    public $queryParams = [
        'all_operator_attributes' => 'all_operator_attributes',
        'hierarchy_code'          => 'hierarchy',
        'max_level'               => 'max_level',
        'with_roles'              => 'with_roles',
    ];
}
