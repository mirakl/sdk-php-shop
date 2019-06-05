<?php
namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Shop\Document\AbstractDownloadShopsDocumentsRequest;

/**
 * (S31) If a list of document identifiers is specified only these documents are downloaded.
 *
 * <ul>
 * <li>If a list of document identifiers is specified only these documents are downloaded.
 * <ul>
 * <li>If more than one docuemnt id is specified, the documents will be wrapped in a ZIP archive</li>
 * <li>If only one document id is specified the document will not be zipped</li>
 * </ul>
 * </li>
 * <li>
 * If no document identifiers is specified, all the shop documents will be downloaded.<br/>
 * Use a list of shop document type codes to retrieve specific types from your shop.<br/>
 * In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.
 * </li>
 * </ul>
 * <p>When documents are retrieved, they're wrapped into a ZIP archive except
 * when only one document id is specified. The tree structure of this archive is as follow:
 * <pre>
 * documents-timestamp.zip
 * |__ shop_id/
 * |   |__ image.png
 * |   |__ image(1).png
 * |   |__ foo.txt
 * </pre>
 * </p>
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Shop\Document\DownloadShopDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadShopDocumentsRequest('SHOP_ID');
 * $request->setDocumentIds(['DOCUMENT_ID_1', 'DOCUMENT_ID_2']);
 * $result = $api->downloadShopDocuments($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadShopDocumentsRequest extends AbstractDownloadShopsDocumentsRequest
{
    /**
     * @param   string  $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();
        $this->setShopId($shopId);
    }

    /**
     * @param   string  $shopId
     * @return  $this
     */
    public function setShopId($shopId)
    {
        return $this->setShopIds([$shopId]);
    }
}