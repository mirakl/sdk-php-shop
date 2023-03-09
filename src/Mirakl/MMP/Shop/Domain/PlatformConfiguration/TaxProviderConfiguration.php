<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsAvalara() // Is Avalara configured as tax provider
 * @method $this setIsAvalara(bool $isAvalara)
 * @method bool  getIsVertex() // Is Vertex configured as tax provider
 * @method $this setIsVertex(bool $isVertex)
 */
class TaxProviderConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'avalara' => 'is_avalara',
        'vertex'  => 'is_vertex',
    ];
}