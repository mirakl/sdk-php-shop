<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getBankAccountNumber()
 * @method  $this   setBankAccountNumber(string $accountNumber)
 * @method  string  getBankAccountType()
 * @method  $this   setBankAccountType(string $accountType)
 */
class ColombianBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'COLOMBIAN';

    /**
     * @var array
     */
    protected static $mapping = [
        'account_number' => 'bank_account_number',
    ];
}
