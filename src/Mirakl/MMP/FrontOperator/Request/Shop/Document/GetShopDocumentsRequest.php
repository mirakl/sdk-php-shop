<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Shop\AbstractGetShopDocumentsRequest;

/**
 * (S30) List shop's documents
 *
 * @method  bool        getIncludeDeleted()
 * @method  $this       setIncludeDeleted(bool $includeDeleted)
 * @method  \DateTime   getUpdatedSince()
 * @method  $this       setUpdatedSince(\DateTime $updatedSince)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Shop\Document\GetShopDocumentsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetShopDocumentsRequest(['SHOP_ID_1', 'SHOP_ID_2']);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection
 * </code>
 */
class GetShopDocumentsRequest extends AbstractGetShopDocumentsRequest
{
    /**
     * @var array
     */
    public $queryParams = ['shop_ids', 'updated_since', 'include_deleted'];
}