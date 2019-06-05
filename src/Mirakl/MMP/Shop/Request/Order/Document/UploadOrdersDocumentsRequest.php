<?php
namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\MMP\Common\Request\Order\Document\AbstractUploadOrdersDocumentsRequest;

/**
 * (OR74) Upload documents to associate to an order
 *
 * Documents filenames must be distinct. Only documents of the following types are supported:
 * csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif.
 * An order can have a maximum of 50 documents.
 *
 * Example:
 *
 * <code>
 * use Mirakl\Core\Domain\Collection\DocumentCollection;
 * use Mirakl\Core\Domain\Document;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Document\UploadOrdersDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $file = new \SplFileObject('/path/to/invoice.pdf');
 * $docs = new DocumentCollection();
 * $docs->add(new Document($file, 'invoice.pdf', 'CUSTOMER_INVOICE'));
 * $request = new UploadOrdersDocumentsRequest($docs, 'ORDER_ID');
 * $result = $api->uploadOrderDocuments($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Order\Document\OrderDocumentsUploadResult
 * </code>
 */
class UploadOrdersDocumentsRequest extends AbstractUploadOrdersDocumentsRequest
{}
