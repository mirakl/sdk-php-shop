<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getType()
 * @method  $this   setType(string $type)
 * @method  string  getValue()
 * @method  $this   setValue(string $value)
 */
class AdditionalFieldValue extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = ['values' => 'value'];

    /**
     * @param   string  $code
     * @param   string  $value
     * @param   string  $type
     */
    public function __construct($code, $value, $type = null)
    {
        parent::__construct();
        $this->setCode($code);
        $this->setValue($value);
        $this->setType($type);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        $data = static::map($data);

        return new static($data['code'], $data['value'], isset($data['type']) ? $data['type'] : null);
    }
}