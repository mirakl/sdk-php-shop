<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\MiraklObject;

class OfferAvailability extends MiraklObject
{
    use DateRangeTrait;
}
