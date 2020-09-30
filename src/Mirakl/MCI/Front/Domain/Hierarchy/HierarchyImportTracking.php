<?php
namespace Mirakl\MCI\Front\Domain\Hierarchy;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getImportId()
 * @method  $this   setImportId(string $importId)
 */
class HierarchyImportTracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'hierarchies_import_id' => 'import_id',
    ];
}