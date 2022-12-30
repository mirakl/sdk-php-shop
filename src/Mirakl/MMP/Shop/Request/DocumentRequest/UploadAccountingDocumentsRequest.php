<?php
namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\MMP\OperatorShop\Request\DocumentRequest\AbstractUploadAccountingDocumentsRequest;

/**
 * (DR74) Upload order-related accounting documents
 *
 * Documents filenames must be distinct.
 * If several formats are required for a document request, they must all be uploaded at once.
 *
 * A maximum of 50 documents can be uploaded simultaneously.
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\DocumentRequest\GetAccountingDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $file = new FileWrapper(new \SplFileObject('/path/to/invoice.pdf'));
 * $docs = new UploadAccountingDocumentCollection();
 * $doc = new UploadAccountingDocument();
 * $doc->setDocumentNumber('123456789');
 * $doc->setRequestId('c8a18e47-9542-4c86-a770-50caa744abb6');
 * $docs->add($doc);
 * $request = new UploadAccountingDocumentsRequest($docs);
 * $request->addFile($file);
 * $result = $api->uploadAccountingDocuments($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\DocumentRequest\UploadedAccountingDocumentsResponse
 * // Loop on result with $result->getRequests()
 * @see \Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\UploadedAccountingDocumentsWithErrorsCollection
 * </code>
 */
class UploadAccountingDocumentsRequest extends AbstractUploadAccountingDocumentsRequest
{}