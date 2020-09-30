<?php
namespace Mirakl\MCI\Front\Request\Product;

use Mirakl\MCI\Common\Request\Product\AbstractProductImportRequest;

/**
 * (P41) Import products to Operator Information System
 *
 * @method  string  getShop()
 * @method  $this   setShop(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Product\ProductImportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ProductImportRequest(new \SplFileObject('/path/to/file.csv'), 'SHOP_ID');
 *
 * $result = $api->importProducts($request);
 * // $result => @see \Mirakl\MCI\Common\Domain\Product\ProductImportTracking
 * </code>
 */
class ProductImportRequest extends AbstractProductImportRequest
{
    /**
     * @var array
     */
    public $bodyParams = ['shop'];

    /**
     * @param   string|array|\SplFileObject $file
     * @param   int                         $shopId
     */
    public function __construct($file, $shopId)
    {
        parent::__construct($file);
        $this->setShop($shopId);
    }
}