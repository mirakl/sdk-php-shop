<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger\EveryAmountTrigger;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger\EveryQuantityTrigger;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger\MinimumAmountTrigger;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger\MinimumQuantityTrigger;
use Mirakl\MMP\Common\Domain\Promotion\Selection;

/**
 * @method Selection getSelection()
 * @method $this     setSelection(array|Selection $selection)
 * @method string    getType()
 * @method $this     setType(string $type)
 */
class Trigger extends MiraklObject
{
    /**
     * @var string
     */
    public static $type = '';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'selection' => [Selection::class, 'factory'],
    ];

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
