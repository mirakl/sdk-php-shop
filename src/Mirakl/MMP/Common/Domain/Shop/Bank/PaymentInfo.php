<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Payment information that would be used to generate the invoice and the payment voucher info file
 *
 * @method  string  getOwner()
 * @method  $this   setOwner(string $owner)
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
     * @param   array $info
     * @return  BankAccountInfo|PaymentInfo
     */
    public static function factory(array $info)
    {
        switch (@$info['@type']) {
            case AbaBankAccountInfo::$type:
                $info = new AbaBankAccountInfo($info);
                break;
            case AuBsbBankAccountInfo::$type:
                $info = new AuBsbBankAccountInfo($info);
                break;
            case BrazilianBankAccountInfo::$type:
                $info = new BrazilianBankAccountInfo($info);
                break;
            case CanadianBankAccountInfo::$type:
                $info = new CanadianBankAccountInfo($info);
                break;
            case HKBankAccountInfo::$type:
                $info = new HKBankAccountInfo($info);
                break;
            case IbanBankAccountInfo::$type:
                $info = new IbanBankAccountInfo($info);
                break;
            case IndianBankAccountInfo::$type:
                $info = new IndianBankAccountInfo($info);
                break;
            case JapaneseBankAccountInfo::$type:
                $info = new JapaneseBankAccountInfo($info);
                break;
            case MexicanBankAccountInfo::$type:
                $info = new MexicanBankAccountInfo($info);
                break;
            case NubanBankAccountInfo::$type:
                $info = new NubanBankAccountInfo($info);
                break;
            case NzBsbBankAccountInfo::$type:
                $info = new NzBsbBankAccountInfo($info);
                break;
            case TaiwaneseBankAccountInfo::$type:
                $info = new TaiwaneseBankAccountInfo($info);
                break;
            case ThaiBankAccountInfo::$type:
                $info = new ThaiBankAccountInfo($info);
                break;
            case UkBankAccountInfo::$type:
                $info = new UkBankAccountInfo($info);
                break;
            default:
                $info = new PaymentInfo($info);
        }

        return $info;
    }
}