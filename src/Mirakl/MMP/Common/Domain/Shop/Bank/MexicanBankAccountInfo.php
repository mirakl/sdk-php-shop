<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $accountNumber)
 * @method string getClabe()
 * @method $this  setClabe(string $clabe)
 */
class MexicanBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'MEXICAN';
}
