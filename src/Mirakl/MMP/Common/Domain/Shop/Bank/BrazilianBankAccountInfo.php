<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $accountNumber)
 * @method string getBankAccountType()
 * @method $this  setBankAccountType(string $bankAccountType)
 * @method string getBankCode()
 * @method $this  setBankCode(string $bankCode)
 * @method string getBranchCode()
 * @method $this  setBranchCode(string $branchCode)
 */
class BrazilianBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'BRAZILIAN';

    /**
     * @var array
     */
    protected static $mapping = [
        'account_number' => 'bank_account_number',
    ];
}
