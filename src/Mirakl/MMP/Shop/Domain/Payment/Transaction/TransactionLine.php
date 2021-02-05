<?php
namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime           getAccountingDocumentCreationDate()
 * @method  $this               setAccountingDocumentCreationDate(\DateTime $accountingDocumentCreationDate)
 * @method  string              getAccountingDocumentNumber()
 * @method  $this               setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method  float               getAmount()
 * @method  $this               setAmount(float $amount)
 * @method  float               getAmountCredited()
 * @method  $this               setAmountCredited(float $amountCredited)
 * @method  float               getAmountDebited()
 * @method  $this               setAmountDebited(float $amountDebited)
 * @method  float               getBalance()
 * @method  $this               setBalance(float $balance)
 * @method  string              getCurrencyIsoCode()
 * @method  $this               setCurrencyIsoCode(string $currencyIsoCode)
 * @method  \DateTime           getDateCreated()
 * @method  $this               setDateCreated(\DateTime $dateCreated)
 * @method  TransactionEntity   getEntities()
 * @method  $this               setEntities(TransactionEntity $entities)
 * @method  string              getId()
 * @method  $this               setId(string $id)
 * @method  \DateTime           getLastUpdated()
 * @method  $this               setLastUpdated(\DateTime $lastUpDated)
 * @method  string              getPaymentState()
 * @method  $this               setPaymentState(string $paymentState)
 * @method  string              getType()
 * @method  $this               setType(string $type)
 */
class TransactionLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'entities' => [TransactionEntity::class, 'create'],
    ];
}