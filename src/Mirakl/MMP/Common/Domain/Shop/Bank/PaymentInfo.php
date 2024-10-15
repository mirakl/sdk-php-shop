<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Payment information that would be used to generate the invoice and the payment voucher info file
 *
 * @method string getOwner()
 * @method $this  setOwner(string $owner)
 */
class PaymentInfo extends MiraklObject
{
    /**
     * @var string
     */
    public static $type = '';

    /**
     * @inheritdoc
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->setData('@type', $this::$type);
    }

    /**
     * @param array $info
     * @return BankAccountInfo|PaymentInfo
     */
    public static function factory(array $info)
    {
        return match (@$info['@type']) {
            AbaBankAccountInfo::$type        => new AbaBankAccountInfo($info),
            AuBsbBankAccountInfo::$type      => new AuBsbBankAccountInfo($info),
            BrazilianBankAccountInfo::$type  => new BrazilianBankAccountInfo($info),
            CanadianBankAccountInfo::$type   => new CanadianBankAccountInfo($info),
            HKBankAccountInfo::$type         => new HKBankAccountInfo($info),
            IbanBankAccountInfo::$type       => new IbanBankAccountInfo($info),
            IndianBankAccountInfo::$type     => new IndianBankAccountInfo($info),
            JapaneseBankAccountInfo::$type   => new JapaneseBankAccountInfo($info),
            MexicanBankAccountInfo::$type    => new MexicanBankAccountInfo($info),
            NubanBankAccountInfo::$type      => new NubanBankAccountInfo($info),
            NzBsbBankAccountInfo::$type      => new NzBsbBankAccountInfo($info),
            TaiwaneseBankAccountInfo::$type  => new TaiwaneseBankAccountInfo($info),
            ThaiBankAccountInfo::$type       => new ThaiBankAccountInfo($info),
            UruguayanBankAccountInfo::$type  => new UruguayanBankAccountInfo($info),
            UkBankAccountInfo::$type         => new UkBankAccountInfo($info),
            ColombianBankAccountInfo::$type  => new ColombianBankAccountInfo($info),
            IsraeliBankAccountInfo::$type    => new IsraeliBankAccountInfo($info),
            VietnameseBankAccountInfo::$type => new VietnameseBankAccountInfo($info),
            SGBankAccountInfo::$type         => new SGBankAccountInfo($info),
            default                          => new PaymentInfo($info),
        };
    }
}
