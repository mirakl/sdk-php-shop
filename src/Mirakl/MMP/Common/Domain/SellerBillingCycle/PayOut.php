<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\SellerBillingCycle;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string    getFailureReason()
 * @method $this     setFailureReason(string $failureReason)
 * @method string    getReference()
 * @method $this     setReference(string $reference)
 * @method string    getState()
 * @method $this     setState(string $state)
 * @method \DateTime getTransactionDate()
 * @method $this     setTransactionDate(\DateTime $transactionDate)
 */
class PayOut extends MiraklObject
{
}
