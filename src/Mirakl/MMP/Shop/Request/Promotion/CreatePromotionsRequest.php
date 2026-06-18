<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Promotion;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Promotion\AbstractCreatePromotionsRequest;

/**
 * (PR03) Create a promotion
 */
#[ApiOperation('PR03')]
class CreatePromotionsRequest extends AbstractCreatePromotionsRequest
{
}
