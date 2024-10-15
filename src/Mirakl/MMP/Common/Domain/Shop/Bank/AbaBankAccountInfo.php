<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $accountNumber)
 * @method string getBic()
 * @method $this  setBic(string $bic)
 * @method string getRoutingNumber()
 * @method $this  setRoutingNumber(string $number)
 */
class AbaBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'ABA';
}
