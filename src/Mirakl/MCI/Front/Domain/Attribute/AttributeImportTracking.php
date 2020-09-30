<?php
namespace Mirakl\MCI\Front\Domain\Attribute;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getImportId()
 * @method  $this   setImportId(string $importId)
 */
class AttributeImportTracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'attributes_import_id' => 'import_id',
    ];
}