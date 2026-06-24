<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Promotion\Selection\AllSelection;
use Mirakl\MMP\Common\Domain\Promotion\Selection\BrandSelection;
use Mirakl\MMP\Common\Domain\Promotion\Selection\CategorySelection;
use Mirakl\MMP\Common\Domain\Promotion\Selection\OfferSelection;
use Mirakl\MMP\Common\Domain\Promotion\Selection\ProductSelection;
use Mirakl\MMP\Common\Domain\Promotion\Selection\PurchasedItemsSelection;

/**
 * @method string getType()
 * @method $this  setType(string $type)
 */
class Selection extends MiraklObject
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
     * @return Selection
     */
    public static function factory(array $info)
    {
        return match ($info['type'] ?? null) {
            AllSelection::$type            => new AllSelection($info),
            BrandSelection::$type          => new BrandSelection($info),
            CategorySelection::$type       => new CategorySelection($info),
            OfferSelection::$type          => new OfferSelection($info),
            ProductSelection::$type        => new ProductSelection($info),
            PurchasedItemsSelection::$type => new PurchasedItemsSelection($info),
            default                        => new Selection($info),
        };
    }
}
