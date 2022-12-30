<?php
namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\MMP\Common\Request\DocumentRequest\AbstractDownloadAccountingDocumentsRequest;

/**
 * (DR73) Download accounting documents
 *
 * At least one of the following filters must be applied: document_id or entity_id
 * If more than one document is requested, the output of the API will be a ZIP archive.
 * The tree structure of this archive is as follows:
 * documents-1624624030618.zip
 * |
 * |__ product-logistic-order/
 * |   |__order1-A/|      |__ INV203837.pdf
 * |      |__ INV203837.cxml
 * |   |__order1-B/|      |__ INV203839.pdf
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\DocumentRequest\DownloadAccountingDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new DownloadAccountingDocumentsRequest();
 * $request->setDocumentIds(['1624624030618']);
 * $request->setDocumentFormats(['PDF']);
 *
 * $result = $api->downloadAccountingDocuments($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 *
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadAccountingDocumentsRequest extends AbstractDownloadAccountingDocumentsRequest
{}