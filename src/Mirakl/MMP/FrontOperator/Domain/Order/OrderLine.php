<?php
namespace Mirakl\MMP\FrontOperator\Domain\Order;

use Mirakl\MMP\Common\Domain\Order\ShopOrderLine;

/**
 * @method  bool    getCanOpenIncident()                        Indicate if an incident can be opened on the order line
 * @method  $this   setCanOpenIncident(bool $canOpenIncident)
 */
class OrderLine extends ShopOrderLine
{}