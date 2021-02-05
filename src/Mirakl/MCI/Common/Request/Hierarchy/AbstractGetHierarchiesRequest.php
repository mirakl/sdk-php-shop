<?php
namespace Mirakl\MCI\Common\Request\Hierarchy;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCI\Common\Domain\Collection\HierarchyCollection;

/**
 * @method  string  getHierarchyCode()
 * @method  $this   setHierarchyCode(string $hierarchyCode)
 * @method  int     getMaxLevel()
 * @method  $this   setMaxLevel(int $maxLevel)
 */
abstract class AbstractGetHierarchiesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/hierarchies';

    /**
     * @var array
     */
    public $queryParams = ['hierarchy_code', 'max_level'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return HierarchyCollection::decorator('hierarchies');
    }
}