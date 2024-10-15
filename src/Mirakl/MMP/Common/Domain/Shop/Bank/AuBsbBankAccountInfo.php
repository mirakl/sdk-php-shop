<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBsbCode()
 * @method $this  setBsbCode(string $bsbCode)
 * @method string getBsbBan()
 * @method $this  setBsbBan(string $bsbBan)
 */
class AuBsbBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'AUBSB';

    /**
     * @var array
     */
    protected static $mapping = [
        'aubsb' => 'bsb_code',
        'auban' => 'bsb_ban',
    ];
}
