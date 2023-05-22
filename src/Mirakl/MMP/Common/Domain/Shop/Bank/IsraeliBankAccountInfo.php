<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getBankAccountNumber()
 * @method  $this   setBankAccountNumber(string $bankAccountNumber)
 * @method  string  getBankCode()
 * @method  $this   setBankCode(string $bankCode)a
 * @method  string  getBranchName()
 * @method  $this   setBranchName(string $branchName)
 */
class IsraeliBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'ISRAELI';
}