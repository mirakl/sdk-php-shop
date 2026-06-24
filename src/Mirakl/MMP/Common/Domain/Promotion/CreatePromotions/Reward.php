<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward\AmountOffReward;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward\FreeItemsReward;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward\PercentageOffReward;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward\ReducedUnitPriceReward;
use Mirakl\MMP\Common\Domain\Promotion\Selection;

/**
 * @method Selection getSelection()
 * @method $this     setSelection(array|Selection $selection)
 * @method string    getType()
 * @method $this     setType(string $type)
 */
class Reward extends MiraklObject
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
