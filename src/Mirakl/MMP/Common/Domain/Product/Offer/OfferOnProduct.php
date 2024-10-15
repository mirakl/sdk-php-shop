<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Product\Offer;

use Mirakl\MMP\Common\Domain\Offer\AbstractOffer;

/**
 * @method int   getNbEvaluation()
 * @method $this setNbEvaluation(int $nbEvaluation)
 *
 * @deprecated Use FrontOperator or Shop class instead based on your role
 * @see \Mirakl\MMP\FrontOperator\Domain\Product\Offer\OfferOnProduct
 * @see \Mirakl\MMP\Shop\Domain\Product\Offer\OfferOnProduct
 */
class OfferOnProduct extends AbstractOffer
{
}
