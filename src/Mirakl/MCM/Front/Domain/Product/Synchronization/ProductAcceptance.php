<?php
namespace Mirakl\MCM\Front\Domain\Product\Synchronization;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Accept or Reject products:
 *  In this case add an acceptance entry with the status ACCEPTED / REJECTED or NEW.
 *  If the status is REJECTED, define the reason_code and an optional message.
 *
 * @method string getMessage()
 * @method $this  setMessage(string $message)
 * @method string getReasonCode()
 * @method $this  setReasonCode(string $reasonCode)
 * @method string getStatus()
 * @method $this  setStatus(string $status)
 */
class ProductAcceptance extends MiraklObject
{
    /** @deprecated Please use Mirakl\MCM\Front\Domain\Product\ProductAcceptanceStatus::STATUS_ACCEPTED instead */
    const STATUS_ACCEPTED = 'ACCEPTED';
    /** @deprecated Please use Mirakl\MCM\Front\Domain\Product\ProductAcceptanceStatus::STATUS_NEW instead */
    const STATUS_NEW      = 'NEW';
    /** @deprecated Please use Mirakl\MCM\Front\Domain\Product\ProductAcceptanceStatus::REJECTED instead */
    const STATUS_REJECTED = 'REJECTED';
}