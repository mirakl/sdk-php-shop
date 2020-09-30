<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop;

class PremiumState
{
    /**
     * The premium state of the shop will be automatically determined from the stats (KPI) of the shop
     * Shipping delay, incident rate, refund rate...
     */
    const DEFAULT_STATE = 'DEFAULT';

    /**
     * The shop will always be premium (its KPIs won't have any effect)
     */
    const PREMIUM       = 'PREMIUM';

    /**
     * The shop will always be NOT premium (its KPIs won't have any effect)
     */
    const NOT_PREMIUM   = 'NOT_PREMIUM';
}