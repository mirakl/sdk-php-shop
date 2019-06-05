<?php
namespace Mirakl\MMP\Common\Domain\Category;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 */
class LogisticClass extends MiraklObject
{
    /**
     * @param   string  $code
     * @param   string  $label
     */
    public function __construct($code, $label)
    {
        parent::__construct();
        $this->setCode($code);
        $this->setLabel($label);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['code'], $data['label']);
    }
}