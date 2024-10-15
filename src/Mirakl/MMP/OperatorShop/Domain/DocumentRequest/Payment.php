<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string    getReference()
 * @method $this     setReference(string $reference)
 * @method string    getState()
 * @method $this     setState(string $state)
 * @method \DateTime getTransactionDate()
 * @method $this     setTransactionDate(\DateTime $transactionDate)
 */
class Payment extends MiraklObject
{
}
