<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\ShopCollection;

/**
 * (S20) Retreive all shops (sort by shop name)
 * This API uses pagination by default and will return 10 shops
 *
 * @method  string[]    getDomains()
 * @method  $this       setDomains(string[] $domains)
 * @method  array       getShopIds()
 * @method  $this       setShopIds(array $shopIds)
 * @method  bool        getPremium()
 * @method  $this       setPremium(bool $flag)
 * @method  string      getState()
 * @method  $this       setState(string $state)
 * @method  \DateTime   getUpdatedSince()
 * @method  $this       setUpdatedSince(\DateTime $updatedSince)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Collection\Shop\ShopCollection;
 * use Mirakl\MMP\FrontOperator\Request\Shop\GetShopsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetShopsRequest();
 *
 * $result = $this->api->getShops($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Shop\ShopCollection
 * </code>
 */
class GetShopsRequest extends AbstractRequest
{
    use PageableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shops';

    /**
     * @var array
     */
    public $queryParams = ['state', 'shop_ids', 'premium', 'updated_since', 'paginate', 'domains'];

    /**
     * @var array
     */
    public $boolOrAllParams = ['premium'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopCollection::decorator('shops');
    }
}