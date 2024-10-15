<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getAccountNumber()
 * @method $this  setAccountNumber(string $accountNumber)
 * @method string getBankCode()
 * @method $this  setBankCode(string $bankCode)
 * @method string getBranchCode()
 * @method $this  setBranchCode(string $branchCode)
 */
class TaiwaneseBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'TAIWANESE';
}
