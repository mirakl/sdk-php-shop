<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getNuban()
 * @method $this  setNuban(string $nuban)
 */
class NubanBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'NUBAN';
}
