<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime         getAccountingDocumentCreationDate()
 * @method $this             setAccountingDocumentCreationDate(\DateTime $accountingDocumentCreationDate)
 * @method string            getAccountingDocumentId()
 * @method $this             setAccountingDocumentId(string $accountingDocumentId)
 * @method string            getAccountingDocumentNumber()
 * @method $this             setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method int               getAmount()
 * @method $this             setAmount(int $amount)
 * @method int               getAmountCredited()
 * @method $this             setAmountCredited(int $amountCredited)
 * @method int               getAmountDebited()
 * @method $this             setAmountDebited(int $amountDebited)
 * @method int               getBalance()
 * @method $this             setBalance(int $balance)
 * @method string            getCurrencyIsoCode()
 * @method $this             setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime         getDateCreated()
 * @method $this             setDateCreated(\DateTime $dateCreated)
 * @method TransactionEntity getEntities()
 * @method $this             setEntities(TransactionEntity|array $entities)
 * @method string            getId()
 * @method $this             setId(string $id)
 * @method \DateTime         getLastUpdated()
 * @method $this             setLastUpdated(\DateTime $lastUpDated)
 * @method string            getPaymentState()
 * @method $this             setPaymentState(string $paymentState)
 * @method string            getPspName()
 * @method $this             setPspName(string $pspName)
 * @method string            getType()
 * @method $this             setType(string $type)
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
