<?php
namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\MMP\Common\Request\Order\Document\AbstractDownloadOrdersDocumentsRequest;

/**
 * (OR73) Download one or multiple documents associated to one or multiple orders
 * <p/>
 * <ul>
 * <li>If a list of document identifiers is specified only these documents are downloaded.
 * <ul>
 * <li>If more than one docuemnt id is specified, the documents will be wrapped in a ZIP archive</li>
 * <li>If only one document id is specified the document will not be zipped</li>
 * </ul>
 * </li>
 * <li>If a list of order identifiers is specified, all documents from those orders are downloaded.<br/>
 * Use a list of order document type codes to retrieve specific types from those orders.<br/>
 * In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.
 * </li>
 * </ul>
 * <p/>
 * <p>When documents are retrieved, they're wrapped into a ZIP archive except
 * when only one document id is specified. The tree structure of this archive is as follow:
 * <pre>
 * documents-timestamp.zip
 * |
 * |__ order_id_x/
 * |   |__ foo.txt
 * |   |__ bar.txt
 * |   |__ baz.pdf
 * |
 * |__ order_id_y/
 * |   |__ image.png
 * |   |__ image(1).png
 * </pre>
 * </p>
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Document\DownloadOrdersDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadOrdersDocumentsRequest();
 * $request->setOrderIds(['ORDER_ID_1', 'ORDER_ID_2']);
 * $result = $api->downloadOrdersDocuments($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadOrdersDocumentsRequest extends AbstractDownloadOrdersDocumentsRequest
{}