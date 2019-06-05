<?php
namespace Mirakl\MMP\Common\Domain\Product\Offer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getType()
 * @method  $this   setType(string $type)
 * @method  string  getValue()
 * @method  $this   setValue(string $value)
 */
class ProductReference extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'reference'      => 'value',
        'reference_type' => 'type',
    ];

    /**
     * @param   string  $type
     * @param   string  $value
     */
    public function __construct($type, $value)
    {
        parent::__construct();
        $this->setType($type);
        $this->setValue($value);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        $data = static::map($data);

        return new static($data['type'], $data['value']);
    }
}