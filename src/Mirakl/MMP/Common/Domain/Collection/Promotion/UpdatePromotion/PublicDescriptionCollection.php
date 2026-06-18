<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Promotion\UpdatePromotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion\PublicDescription;

/**
 * @method PublicDescription current()
 * @method PublicDescription first()
 * @method PublicDescription get($offset)
 * @method PublicDescription last()
 * @method PublicDescription offsetGet($offset)
 */
class PublicDescriptionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PublicDescription::class;
}
