<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBic()
 * @method $this  setBic(string $bic)
 * @method string getIban()
 * @method $this  setIban(string $iban)
 */
class IbanBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'IBAN';
}
