<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\MMP\FrontOperator\Domain\Offer;

/**
 * @method  boolean getIsReward()
 * @method  $this   setIsReward(boolean $reward)
 * @method  boolean getIsTrigger()
 * @method  $this   setIsTrigger(boolean $trigger)
 */
abstract class AbstractOfferOnPromotion extends Offer
{}