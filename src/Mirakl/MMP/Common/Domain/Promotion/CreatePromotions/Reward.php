<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getSelection()
 * @method $this  setSelection(string $selection)
 */
class Reward extends MiraklObject
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
     * @return Reward
     */
    public static function factory(array $info)
    {
        return match ($info['type'] ?? null) {
            AmountOffReward::$type        => new AmountOffReward($info),
            FreeItemsReward::$type        => new FreeItemsReward($info),
            PercentageOffReward::$type    => new PercentageOffReward($info),
            ReducedUnitPriceReward::$type => new ReducedUnitPriceReward($info),
            default                       => new Reward($info),
        };
    }
}
