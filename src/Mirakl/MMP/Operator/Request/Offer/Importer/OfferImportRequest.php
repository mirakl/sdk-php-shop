<?php
namespace Mirakl\MMP\Operator\Request\Offer\Importer;

use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportRequest;

/**
 * (OF01) Import offers
 * NB. This API must be called with the OPERATOR role and the user must have the 'Shop modification' right
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Offer\Importer\OfferImportRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $file = new \SplFileObject('/path/to/file.csv');
 * $request = new OfferImportRequest($file, 'SHOP_ID');
 * $request->setImportMode(\Mirakl\MMP\OperatorShop\Domain\Offer\Importer\ImportMode::PARTIAL_UPDATE); // Optional
 * $request->setWithProducts(true); // Optional
 * $result = $api->importOffers($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferProductImportTracking
 * </code>
 */
class OfferImportRequest extends AbstractOfferImportRequest
{
    /**
     * @var array
     */
    public $bodyParams = [
        'shop_id' => 'shop',
        'file',
        'import_mode',
        'with_products'
    ];

    /**
     * @param   mixed   $file
     * @param   string  $shopId
     */
    public function __construct($file, $shopId)
    {
        parent::__construct($file);
        $this->setShopId($shopId);
    }
}