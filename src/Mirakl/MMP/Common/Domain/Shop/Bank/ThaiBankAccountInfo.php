<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getAccountNumber()
 * @method $this  setAccountNumber(string $accountNumber)
 */
class ThaiBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'THAI';
}
