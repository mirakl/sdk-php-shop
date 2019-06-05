<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getApprovalDelay()
 * @method  $this   setApprovalDelay(int $delay)
 * @method  float   getApprovalRate()
 * @method  $this   setApprovalRate(float $rate)
 * @method  int     getEvaluationsCount()
 * @method  $this   setEvaluationsCount(int $count)
 * @method  int     getOffersCount()
 * @method  $this   setOffersCount(int $count)
 * @method  int     getOrdersCount()
 * @method  $this   setOrdersCount(int $count)
 * @method  float   getOrderMessagesResponseDelay()
 * @method  $this   setOrderMessagesResponseDelay(float $delay)
 */
class ShopStats extends MiraklObject
{}