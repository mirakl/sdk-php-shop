<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $accountNumber)
 * @method string getBranchName()
 * @method $this  setBranchName(string $branchName)
 */
class VietnameseBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'VIETNAMESE';
}
