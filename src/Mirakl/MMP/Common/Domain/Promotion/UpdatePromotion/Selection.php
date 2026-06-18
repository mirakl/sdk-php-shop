<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion;

use Mirakl\Core\Domain\MiraklObject;

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
            BrandSelection::$type          => new BrandSelection($info),
            CategorySelection::$type       => new CategorySelection($info),
            OfferSelection::$type          => new OfferSelection($info),
            ProductSelection::$type        => new ProductSelection($info),
            PurchasedItemsSelection::$type => new PurchasedItemsSelection($info),
            default                        => new Selection($info),
        };
    }
}
