<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getSelection()
 * @method $this  setSelection(string $selection)
 */
class Trigger extends MiraklObject
{
    /**
     * @var string
     */
    public static $type = '';

    /**
     * @inheritdoc
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (static::$type !== '') {
            $this->setData('type', static::$type);
        }
    }

    /**
     * @param array $info
     * @return Trigger
     */
    public static function factory(array $info)
    {
        return match ($info['type'] ?? null) {
            EveryAmountTrigger::$type     => new EveryAmountTrigger($info),
            EveryQuantityTrigger::$type   => new EveryQuantityTrigger($info),
            MinimumAmountTrigger::$type   => new MinimumAmountTrigger($info),
            MinimumQuantityTrigger::$type => new MinimumQuantityTrigger($info),
            default                       => new Trigger($info),
        };
    }
}
