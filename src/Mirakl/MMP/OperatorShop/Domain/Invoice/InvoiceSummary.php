<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float  getAmountTransferred()
 * @method $this  setAmountTransferred(float $amountTransferred)
 * @method string getCode()
 * @method $this  setCode(string $code)
 * @method float  getTotalCommissionsExclTax()
 * @method $this  setTotalCommissionsExclTax(float $totalCommissionsExclTax)
 * @method float  getTotalCommissionsInclTax()
 * @method $this  setTotalCommissionsInclTax(float $totalCommissionsInclTax)
 * @method float  getTotalNonPayableOrdersExclTax()
 * @method $this  setTotalNonPayableOrdersExclTax(float $totalNonPayableOrdersExclTax)
 * @method float  getTotalNonPayableOrdersInclTax()
 * @method $this  setTotalNonPayableOrdersInclTax(float $totalNonPayableOrdersInclTax)
 * @method float  getTotalOperatorPaidShippingChargesExclTax()
 * @method $this  setTotalOperatorPaidShippingChargesExclTax(float $totalOperatorPaidShippingChargesExclTax)
 * @method float  getTotalOperatorPaidShippingChargesInclTax()
 * @method $this  setTotalOperatorPaidShippingChargesInclTax(float $totalOperatorPaidShippingChargesInclTax)
 * @method float  getTotalOperatorRemittedTaxes()
 * @method $this  setTotalOperatorRemittedTaxes(float $totalOperatorRemittedTaxes)
 * @method float  getTotalOtherCreditsExclTax()
 * @method $this  setTotalOtherCreditsExclTax(float $totalOtherCreditsExclTax)
 * @method float  getTotalOtherCreditsInclTax()
 * @method $this  setTotalOtherCreditsInclTax(float $totalOtherCreditsInclTax)
 * @method float  getTotalOtherInvoicesExclTax()
 * @method $this  setTotalOtherInvoicesExclTax(float $totalOtherInvoicesExclTax)
 * @method float  getTotalOtherInvoicesInclTax()
 * @method $this  setTotalOtherInvoicesInclTax(float $totalOtherInvoicesInclTax)
 * @method float  getTotalPayableOrdersExclTax()
 * @method $this  setTotalPayableOrdersExclTax(float $totalPayableOrdersExclTax)
 * @method float  getTotalPayableOrdersInclTax()
 * @method $this  setTotalPayableOrdersInclTax(float $totalPayableOrdersInclTax)
 * @method float  getTotalRefundCommissionsExclTax()
 * @method $this  setTotalRefundCommissionsExclTax(float $totalRefundCommissionsExclTax)
 * @method float  getTotalRefundCommissionsInclTax()
 * @method $this  setTotalRefundCommissionsInclTax(float $totalRefundCommissionsInclTax)
 * @method float  getTotalRefundOperatorPaidShippingChargesExclTax()
 * @method $this  setTotalRefundOperatorPaidShippingChargesExclTax(float $totalRefundOperatorPaidShippingChargesExclTax)
 * @method float  getTotalRefundOperatorPaidShippingChargesInclTax()
 * @method $this  setTotalRefundOperatorPaidShippingChargesInclTax(float $totalRefundOperatorPaidShippingChargesInclTax)
 * @method float  getTotalRefundOperatorRemittedTaxes()
 * @method $this  setTotalRefundOperatorRemittedTaxes(float $totalRefundOperatorRemittedTaxes)
 * @method float  getTotalRefundOrdersExclTax() @deprecated Method deprecated since 1.9.0. Please use getTotalRefundPayableOrdersExclTax instead
 * @method $this  setTotalRefundOrdersExclTax(float $totalRefundOrdersExclTax)
 * @method float  getTotalRefundOrdersInclTax() @deprecated Method deprecated since 1.9.0. Please use getTotalRefundPayableOrdersInclTax instead
 * @method $this  setTotalRefundOrdersInclTax(float $totalRefundOrdersInclTax)
 * @method float  getTotalRefundPayableOrdersExclTax()
 * @method $this  setTotalRefundPayableOrdersExclTax(float $totalRefundPayableOrdersExclTax)
 * @method float  getTotalRefundPayableOrdersInclTax()
 * @method $this  setTotalRefundPayableOrdersInclTax(float $totalRefundPayableOrdersInclTax)
 * @method float  getTotalRefundNonPayableOrdersExclTax()
 * @method $this  setTotalRefundNonPayableOrdersExclTax(float $totalRefundNonPayableOrdersExclTax)
 * @method float  getTotalRefundNonPayableOrdersInclTax()
 * @method $this  setTotalRefundNonPayableOrdersInclTax(float $totalRefundNonPayableOrdersInclTax)
 * @method float  getTotalSubscriptionExclTax()
 * @method $this  setTotalSubscriptionExclTax(float $totalSubscriptionExclTax)
 * @method float  getTotalSubscriptionInclTax()
 * @method $this  setTotalSubscriptionInclTax(float $totalSubscriptionInclTax)
 * @method float  getAmountTransferredToOperator()
 * @method $this  setAmountTransferredToOperator(float $amountTransferredToOperator)
 */
class InvoiceSummary extends MiraklObject
{
}
