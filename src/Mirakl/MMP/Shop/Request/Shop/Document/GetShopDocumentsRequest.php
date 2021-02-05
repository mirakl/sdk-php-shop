<?php
namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Shop\AbstractGetShopDocumentsRequest;

/**
 * (S30) List shop's documents
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Shop\Document\GetShopDocumentsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetShopDocumentsRequest(['SHOP_ID_1', 'SHOP_ID_2']);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection
 * </code>
 */
class GetShopDocumentsRequest extends AbstractGetShopDocumentsRequest
{}