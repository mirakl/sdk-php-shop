<?php
namespace Mirakl\MCM\Shop\Client;

use Mirakl\Core\Client\AbstractApiClient;
use Mirakl\Core\Client\ShopApiClientTrait;
use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\Core\Domain\FileWrapper;
use Mirakl\MCM\Shop\Request\Catalog\Product\GetSourceProductDataSheetStatusFileRequest;
use Mirakl\MCM\Shop\Request\Catalog\Product\GetSourceProductDataSheetStatusRequest;

/**
 * @method MiraklCollection getSourceProductDataSheetStatus(GetSourceProductDataSheetStatusRequest $request)
 * @method FileWrapper      getSourceProductDataSheetStatusFile(GetSourceProductDataSheetStatusFileRequest $request)
 */
class ShopApiClient extends AbstractApiClient
{
    use ShopApiClientTrait;

    /**
     * @param string      $baseUrl
     * @param string      $apiKey
     * @param string|null $shopId
     */
    public function __construct($baseUrl, $apiKey, $shopId = null)
    {
        parent::__construct($baseUrl, $apiKey);

        if ($shopId) {
            $this->setShopId($shopId);
        }
    }
}