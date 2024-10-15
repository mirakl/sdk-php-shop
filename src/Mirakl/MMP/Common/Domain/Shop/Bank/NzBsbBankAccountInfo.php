<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBsbCode()
 * @method $this  setBsbCode(string $bsbCode)
 * @method string getBsbBan()
 * @method $this  setBsbBan(string $bsbBan)
 */
class NzBsbBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'NZBSB';

    /**
     * @var array
     */
    protected static $mapping = [
        'nzbsb' => 'bsb_code',
        'nzban' => 'bsb_ban',
    ];
}
