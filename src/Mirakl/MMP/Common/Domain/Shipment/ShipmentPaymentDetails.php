<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string    getTransactionNumber()
 * @method $this     setTransactionNumber(string $transactionNumber)
 * @method \DateTime getTransactionDate()
 * @method $this     setTransactionDate(\DateTime $transactionDate)
 * @method \DateTime getCustomerDebitedDate()
 * @method $this     setCustomerDebitedDate(\DateTime $customerDebitedDate)
 */
class ShipmentPaymentDetails extends MiraklObject
{}