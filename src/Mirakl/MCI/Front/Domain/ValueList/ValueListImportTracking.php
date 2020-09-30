<?php
namespace Mirakl\MCI\Front\Domain\ValueList;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getImportId()
 * @method  $this   setImportId(string $importId)
 */
class ValueListImportTracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'values_lists_import_id' => 'import_id',
    ];
}