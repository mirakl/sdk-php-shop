<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop\Location;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Location\ShopTaxLocationCollection;

/**
 * (S40) List shop's US tax locations.
 * You must specify at least one of the following parameters: 'shop_ids', 'updated_since'
 *
 * Example:
 * <code>
 * <?php
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Shop\Location\GetShopTaxLocationsRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = 'your_api_key';
 * $shopIds = ['your_shop_id1', 'your_shop_id2'];
 *
 * try {
 *      // Building request
 *      $request = new GetShopTaxLocationsRequest($shopIds);
 *
 *      // Instantiating the Mirakl API Client
 *      $api = new MiraklApiClient($url, $apiKey);
 *
 *      // Calling the API
 *      $result = $api->getShopTaxLocations($request);
 *      // \Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Location\ShopTaxLocationCollection
 *      var_dump($result); // decorated response
 *
 *      // You can also retrieve raw response by using run() method of API client:
 *      $result = $api->run($request); // or $api->raw()->getShopTaxLocations($request)
 *      var_dump($result); // returns \Psr\Http\Message\ResponseInterface
 * } catch (\Exception $e) {
 *      // An exception is thrown if object requested is not found or if an error occurs
 *      var_dump($e);
 * }
 * </code>
 *
 * @method  bool        getIncludeDeleted()
 * @method  $this       setIncludeDeleted(bool $includeDeleted)
 * @method  bool        isIncludeDeleted()
 * @method  array       getLocationTypes()
 * @method  $this       setLocationTypes(array $locationTypes)
 * @method  array       getShopIds()
 * @method  $this       setShopIds(array $shopId)
 * @method  \DateTime   getUpdatedSince()
 * @method  $this       setUpdatedSince(\DateTime $updatedSince)
 */
class GetShopTaxLocationsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/tax/locations';

    /**
     * @var array
     */
    public $queryParams = ['location_types', 'shop_ids', 'updated_since', 'include_deleted'];

    /**
     * @param   array   $shopIds
     */
    public function __construct(array $shopIds)
    {
        parent::__construct();
        $this->setShopIds($shopIds);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopTaxLocationCollection::decorator('tax_locations');
    }
}