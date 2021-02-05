<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method  string  getBsbCode()
 * @method  $this   setBsbCode(string $bsbCode)
 * @method  string  getBsbBan()
 * @method  $this   setBsbBan(string $bsbBan)
 */
class AuBsbBankAccountInfo extends BankAccountInfo
{
    /**
     * @var array
     */
    protected static $mapping = [
        'aubsb' => 'bsb_code',
        'auban' => 'bsb_ban',
    ];
}