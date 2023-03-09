<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection;

/**
 * @method  string                  getId()
 * @method  $this                   setId(string $id)
 * @method  string                  getInvoiceReference()
 * @method  $this                   setInvoiceReference(string $invoiceReference)
 * @method  string                  getOrderId()
 * @method  $this                   setOrderId(string $orderId)
 * @method  ShipmentLineCollection  getShipmentLines()
 * @method  $this                   setShipmentLines(array|ShipmentLineCollection $shipmentLines)
 * @method  string                  getStatus()
 * @method  $this                   setStatus(string $status)
 * @method  ShipmentTracking        getTracking()
 * @method  $this                   setTracking(array|ShipmentTracking $tracking)
 * @method  \DateTime               getCreatedDate()
 * @method  $this                   setCreatedDate(\DateTime $createdDate)
 * @method  \DateTime               getLastUpdatedDate()
 * @method  $this                   setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method  ShipmentPaymentDetails  getPaymentDetails()
 * @method  $this                   setPaymentDetails(ShipmentPaymentDetails $paymentDetails)
 * @method  \DateTime               getShippedDate()
 * @method  $this                   setShippedDate(\DateTime $shippedDate)
 * @method  string                  getStatusCustomerDebit() \\ One of NO_DEBIT, NOT_STARTED, WAITING_OPERATOR_SYSTEM_CONTACT, WAITING_DEBIT_CONFIRMATION, DEBIT_OK, CANCELED
 * @method  $this                   setStatusCustomerDebit(string $statusCustomerDebit)
 */
class Shipment extends MiraklObject
{
    const NO_DEBIT_STATUS_CUSTOMER_DEBIT                        = 'NO_DEBIT';
    const NOT_STARTED_STATUS_CUSTOMER_DEBIT                     = 'NOT_STARTED';
    const WAITING_OPERATOR_SYSTEM_CONTACT_STATUS_CUSTOMER_DEBIT = 'WAITING_OPERATOR_SYSTEM_CONTACT';
    const WAITING_DEBIT_CONFIRMATION_STATUS_CUSTOMER_DEBIT      = 'WAITING_DEBIT_CONFIRMATION';
    const DEBIT_OK_STATUS_CUSTOMER_DEBIT                        = 'DEBIT_OK';
    const CANCELED_STATUS_CUSTOMER_DEBIT                        = 'CANCELED';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_lines'  => [ShipmentLineCollection::class, 'create'],
        'tracking'        => [ShipmentTracking::class, 'create'],
        'payment_details' => [ShipmentPaymentDetails::class, 'create'],
    ];
}