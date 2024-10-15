<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $accountNumber)
 * @method string getBankKey()
 * @method $this  setBankKey(string $bankKey)
 * @method string getSwiftCode()
 * @method $this  setSwiftCode(string $swiftCode)
 */
class SGBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'SG';
}
