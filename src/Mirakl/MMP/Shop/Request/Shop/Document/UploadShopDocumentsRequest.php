<?php
namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Shop\Document\AbstractUploadShopDocumentsRequest;

/**
 * (S32) Upload documents to associate to a shop
 *
 * Documents filenames must be distincts and there can be only one file per document type.<br/>
 * The following extensions are supported: csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif, zip.
 * NB. A shop can have a maximum of 50 documents.
 *
 * Example:
 *
 * <code>
 * use Mirakl\Core\Domain\Collection\DocumentCollection;
 * use Mirakl\Core\Domain\Document;
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Shop\Document\UploadShopDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $file = new \SplFileObject('/path/to/file.pdf');
 * $docs = new DocumentCollection();
 * $docs->add(new Document($file, 'this is the document contents', 'ANOTHER_SPECIAL_FILE'));
 * $request = new UploadShopDocumentsRequest($docs, 'SHOP_ID');
 * $result = $api->uploadShopDocuments($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Document\DocumentsUploadResult
 * </code>
 */
class UploadShopDocumentsRequest extends AbstractUploadShopDocumentsRequest
{}