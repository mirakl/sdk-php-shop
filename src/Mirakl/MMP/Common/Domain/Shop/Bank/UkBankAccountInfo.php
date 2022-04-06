<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getBankAccountNumber()
 * @method  $this   setBankAccountNumber(string $bankAccountNumber)
 * @method  string  getBankSortCode()
 * @method  $this   setBankSortCode(string $bankSortCode)
 * @method  string  getSwiftCode()
 * @method  $this   setSwiftCode(string $swiftCode)
 */
class UkBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'UK';
}