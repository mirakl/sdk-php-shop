<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsActivated()
 * @method $this setIsActivated(bool $isActivated)
 * @method bool  getIsRefundCancelAuthorized()
 * @method $this setIsRefundCancelAuthorized(bool $isRefundCancelAuthorized)
 */
class DirectPaymentCustomerStoreConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'activated'                => 'is_activated',
        'refund_cancel_authorized' => 'is_refund_cancel_authorized',
    ];
}