<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment;

use Mirakl\Core\Domain\DateRangeTrait;
use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\MMP\Common\Domain\Collection\Payment\TransactionLogCollection;

/**
 * (TL01) List transaction logs
 * This API uses pagination by default and will return 10 transaction logs
 *
 * @method  string      getAccountingDocumentNumber()
 * @method  $this       setAccountingDocumentNumber(string $number)
 * @method  \DateTime   getEndTransactionDate()
 * @method  $this       setEndTransactionDate(\DateTime $endTransactionDate)
 * @method  array       getOrderIds()
 * @method  $this       setOrderIds(array $orderIds)
 * @method  array       getOrderLineIds()
 * @method  $this       setOrderLineIds(array $orderLineIds)
 * @method  array       getPaymentStates()
 * @method  $this       setPaymentStates(array $paymentStates)
 * @method  string      getPaymentVoucherNumber()
 * @method  $this       setPaymentVoucherNumber(string $number)
 * @method  string      getShopId()
 * @method  $this       setShopId(string $shopId)
 * @method  string      getShopTaxCode()
 * @method  $this       setShopTaxCode(string $shopTaxCode) The code of the order tax associated to the transaction log,
 *                                                          or {@literal null} if the transaction log is not associated
 *                                                          to an order tax
 * @method  \DateTime   getStartTransactionDate()
 * @method  $this       setStartTransactionDate(\DateTime $startTransactionDate)
 * @method  array       getTransactionTypes()
 * @method  $this       setTransactionTypes(array $types)
 * @method  \DateTime   getUpdatedSince()
 * @method  $this       setUpdatedSince(\DateTime $updatedSince)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Commun\Domain\Payment\TransactionType;
 * use Mirakl\MMP\Commun\Domain\Payment\TransactionLogState;
 * use Mirakl\MMP\FrontOperator\Request\Payment\GetTransactionLogsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetTransactionLogsRequest();
 * $request->setMax(10)
 *     ->setOffset(0)
 *     ->setShopId('3249')
 *     ->setStartDate('2014-12-12')
 *     ->setEndDate('2014-12-12')
 *     ->setStartTransactionDate('2014-12-12')
 *     ->setEndTransactionDate('2014-12-12')
 *     ->setUpdatedSince('2014-12-12')
 *     ->setTransactionTypes([TransactionType::COMMISSION_FEE])
 *     ->setAccountingDocumentNumber('43902IRDJ')
 *     ->setPaymentVoucherNumber('3R93DJ')
 *     ->setPaymentStates([TransactionLogState::PAYABLE])
 *     ->setOrderIds(['349R34'])
 *     ->setOrderLineIds(['349R34-A'])
 *     ->setPaginate(true);
 * $result = $api->getTransactionLogs($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Payment\TransactionLogCollection
 * </code>
 */
class GetTransactionLogsRequest extends AbstractRequest
{
    use PageableTrait;
    use DateRangeTrait;
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/transactions_logs';

    /**
     * @var array
     */
    public $queryParams = [
        'shop_id' => 'shop_id',
        'start_transaction_date' => 'start_transaction_date',
        'end_transaction_date' => 'end_transaction_date',
        'updated_since' => 'updated_since',
        'payment_voucher_number' => 'payment_voucher',
        'payment_states' => 'payment_states',
        'transaction_types' => 'transaction_types',
        'accounting_document_number' => 'accounting_document_number',
        'order_ids' => 'order_ids',
        'order_line_ids' => 'order_line_ids',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return TransactionLogCollection::decorator('lines');
    }
}