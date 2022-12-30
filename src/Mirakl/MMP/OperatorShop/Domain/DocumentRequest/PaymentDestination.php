<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getIban()
 * @method $this  setIban(string $iban)
 * @method string getPaymentReference()
 * @method $this  setPaymentReference(string $paymentReference)
 */
class PaymentDestination extends MiraklObject
{
    /**
     * @var string
     */
    public static $type = 'IBAN';

    /**
     * @inheritdoc
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->setData('@type', $this::$type);
    }
}