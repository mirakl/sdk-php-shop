<?php
namespace Mirakl\MCI\Common\Request\Attribute;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCI\Common\Domain\Collection\AttributeCollection;

/**
 * @method  string  getHierarchyCode()
 * @method  $this   setHierarchyCode(string $hierarchyCode)
 * @method  int     getMaxLevel()
 * @method  $this   setMaxLevel(int $maxLevel)
 * @method  bool    getWithRoles()
 * @method  $this   setWithRoles(bool $withRoles)
 */
abstract class AbstractGetAttributesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/attributes';

    /**
     * @var array
     */
    public $queryParams = [
        'hierarchy_code' => 'hierarchy',
        'max_level'      => 'max_level',
        'with_roles'     => 'with_roles',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return AttributeCollection::decorator('attributes');
    }
}