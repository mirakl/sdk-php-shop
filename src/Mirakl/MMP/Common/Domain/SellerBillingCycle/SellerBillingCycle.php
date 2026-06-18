<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\SellerBillingCycle;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float     getAmountTransferredToOperator()
 * @method $this     setAmountTransferredToOperator(float $amountTransferredToOperator)
 * @method float     getAmountTransferredToSeller()
 * @method $this     setAmountTransferredToSeller(float $amountTransferredToSeller)
 * @method string    getCurrencyIsoCode()
 * @method $this     setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime getDateCreated()
 * @method $this     setDateCreated(\DateTime $dateCreated)
 * @method string    getId()
 * @method $this     setId(string $id)
 * @method string    getPaymentVoucherNumber()
 * @method $this     setPaymentVoucherNumber(string $paymentVoucherNumber)
 * @method PayOut    getPayOut()
 * @method $this     setPayOut(array|PayOut $payOut)
 * @method string    getPayOutPspCode()
 * @method $this     setPayOutPspCode(string $payOutPspCode)
 * @method Shop      getShop()
 * @method $this     setShop(array|Shop $shop)
 * @method Summary   getSummary()
 * @method $this     setSummary(array|Summary $summary)
 */
class SellerBillingCycle extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'pay_out' => [PayOut::class, 'create'],
        'shop'    => [Shop::class, 'create'],
        'summary' => [Summary::class, 'create'],
    ];
}
