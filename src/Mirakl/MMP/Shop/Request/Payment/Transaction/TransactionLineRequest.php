<?php
namespace Mirakl\MMP\Shop\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\MMP\Shop\Domain\Collection\Payment\Transaction\TransactionLineCollection;

/**
 * (TL02) Get a listing of transactions (this resource supports seek pagination)
 *
 * @method  string      getAccountingDocumentNumber()
 * @method  $this       setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method  \DateTime   getDateCreatedFrom()
 * @method  $this       setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method  \DateTime   getDateCreatedTo()
 * @method  $this       setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method  \DateTime   getLastUpdatedFrom()
 * @method  $this       setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method  string      getOrderId()
 * @method  $this       setOrderId(string $orderId)
 * @method  string      getOrderLineId()
 * @method  $this       setOrderLineId(string $orderLineId)
 * @method  string      getPaymentState()
 * @method  $this       setPaymentState(string $paymentState)
 * @method  \DateTime   getTransactionDateFrom()
 * @method  $this       setTransactionDateFrom(\DateTime $transactionDateFrom)
 * @method  \DateTime   getTransactionDateTo()
 * @method  $this       setTransactionDateTo(\DateTime $transactionDateTo)
 * @method  string      getTransactionType()
 * @method  $this       setTransactionType(string $transactionType)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new \Mirakl\MMP\Shop\Request\Payment\Transaction\TransactionLineRequest();
 * $request->setDateCreatedFrom(new \Datetime('-1 Month'));
 *
 * $result = $api->getTransactionLine($request);
 *
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // Loop on collection with $result->getCollection()
 *
 * // Get next results with token from response:
 * $request = new \Mirakl\MMP\Shop\Request\Payment\Transaction\TransactionLineRequest();
 * $request->setPageToken($result->getNextPageToken());
 * $result = $api->getTransactionLine($request);
 * var_dump($result); // @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
 *
 * // See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
 * </code>
 */
class TransactionLineRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs';

    /**
     * @var array
     */
    public $queryParams = [
        'accounting_document_number',
        'date_created_from',
        'date_created_to',
        'last_updated_from',
        'order_id',
        'order_line_id',
        'payment_state',
        'transaction_date_from',
        'transaction_date_to',
        'transaction_type',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new SeekableCollection(TransactionLineCollection::class, 'data');
    }
}
