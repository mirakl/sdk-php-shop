<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getAccountNumber()
 * @method  $this   setAccountNumber(string $accountNumber)
 * @method  string  getIndianFinancialSystemCode()
 * @method  $this   setIndianFinancialSystemCode(string $indianFinancialSystemCode)
 * @method  string  getSwiftCode()
 * @method  $this   setSwiftCode(string $swiftCode)
 */
class IndianBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'INDIAN';
}