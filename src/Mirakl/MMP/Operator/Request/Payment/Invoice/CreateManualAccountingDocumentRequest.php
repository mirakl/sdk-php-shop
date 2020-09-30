<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Operator\Domain\Collection\Invoice\CreateManualAccountingDocumentCollection
    as DocumentCollection;
use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments;

/**
 * (IV03) Create a manual accounting document
 *
 * @method  DocumentCollection  getManualAccountingDocuments()
 * @method  $this               setManualAccountingDocuments(array|DocumentCollection $documents)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\ShopCollection;
 * use Mirakl\MMP\FrontOperator\Request\Shop\GetShopsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $input = [ 'manual_accounting_documents' => [
 *  'shop_id' => 122,
 *  'type' => 'INVOICE',
 *  'emission_date' => '2014-12-12T12:12:00.000+0000',
 *  'issued' => false,
 *  'lines' => [
 *     [
 *       'description' => 'Subscription',
 *       'quantity' => '2',
 *       'amount' => 34.54,
 *       'tax_codes' => [
 *           'TVA'
 *          ]
 *     ]
 *   ]
 * ]
 *
 * $request = new CreateManualAccountingDocumentRequest($input['manual_accounting_documents']);
 *
 * $result = $api->createManualAccountingDocument($request);
 * // $result => @see \Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments
 * </code>
 */
class CreateManualAccountingDocumentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/invoices';

    /**
     * @var array
     */
    public $bodyParams = ['manual_accounting_documents'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'manual_accounting_documents' => [DocumentCollection::class, 'create'],
    ];

    /**
     * @param   array|DocumentCollection    $manualAccountingDocuments
     */
    public function __construct($manualAccountingDocuments)
    {
        parent::__construct();
        $this->setManualAccountingDocuments($manualAccountingDocuments);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedManualAccountingDocuments::decorator();
    }
}