<?php
namespace Mirakl\MMP\Common\Domain\Shop\Bank;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Payment information that would be use to generate the invoice and the payment voucher info file
 *
 * @method  string  getOwner()
 * @method  $this   setOwner(string $owner)
 */
class PaymentInfo extends MiraklObject
{
    /**
     * @param   array $info
     * @return  BankAccountInfo|PaymentInfo
     */
    public static function factory(array $info)
    {
        switch (@$info['@type']) {
            case 'ABA':
                $info = new AbaBankAccountInfo($info);
                break;
            case 'AUBSB':
                $info = new AuBsbBankAccountInfo($info);
                break;
            case 'BRAZILIAN':
                $info = new BrazilianBankAccountInfo($info);
                break;
            case 'CANADIAN':
                $info = new CanadianBankAccountInfo($info);
                break;
            case 'HK':
                $info = new HKBankAccountInfo($info);
                break;
            case 'IBAN':
                $info = new IbanBankAccountInfo($info);
                break;
            case 'JAPANESE':
                $info = new JapaneseBankAccountInfo($info);
                break;
            case 'MEXICAN':
                $info = new MexicanBankAccountInfo($info);
                break;
            case 'NUBAN':
                $info = new NubanBankAccountInfo($info);
                break;
            case 'NZBSB':
                $info = new NzBsbBankAccountInfo($info);
                break;
                break;
            case 'TAIWANESE':
                $info = new TaiwaneseBankAccountInfo($info);
                break;
            case 'THAI':
                $info = new ThaiBankAccountInfo($info);
                break;
            default:
                $info = new PaymentInfo($info);
        }

        return $info;
    }
}