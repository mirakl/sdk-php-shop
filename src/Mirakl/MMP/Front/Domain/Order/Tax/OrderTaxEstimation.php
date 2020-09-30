<?php
namespace Mirakl\MMP\Front\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmount()
 * @method  $this   setAmount(float $amount)
 * @method  string  getName()
 * @method  $this   setName(string $name)
 * @method  string  getType()
 * @method  $this   setType(string $type)
 */
class OrderTaxEstimation extends MiraklObject
{
    /**
     * @param   float   $amount
     * @param   string  $type
     * @param   string  $name
     */
    public function __construct($amount, $type, $name)
    {
        parent::__construct();
        $this->setAmount($amount);
        $this->setType($type);
        $this->setName($name);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['amount'], $data['type'], $data['name']);
    }
}