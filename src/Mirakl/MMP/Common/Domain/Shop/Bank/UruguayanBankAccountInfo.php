<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getBankAccountNumber()
 * @method  $this   setBankAccountNumber(string $bankAccountNumber)
 * @method  string  getBankAccountType()
 * @method  $this   setBankAccountType(string $bankAccountType)
 * @method  string  getBranchCode()
 * @method  $this   setBranchCode(string $branchCode)
 */
class UruguayanBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'URUGUAYAN';

    /**
     * @var array
     */
    protected static $mapping = [
        'account_number' => 'bank_account_number',
    ];
}