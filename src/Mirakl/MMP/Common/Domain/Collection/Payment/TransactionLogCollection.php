<?php
namespace Mirakl\MMP\Common\Domain\Collection\Payment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Payment\TransactionLog;

/**
 * @method  TransactionLog  current()
 * @method  TransactionLog  first()
 * @method  TransactionLog  get($offset)
 * @method  TransactionLog  offsetGet($offset)
 * @method  TransactionLog  last()
 */
class TransactionLogCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = TransactionLog::class;
}