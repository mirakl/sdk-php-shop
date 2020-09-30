<?php
namespace Mirakl\MMP\Operator\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Shop\Update\UpdatedShops;
use Mirakl\MMP\Operator\Domain\Collection\Shop\Update\UpdateShopCollection;

/**
 * (S07) Update shops
 *
 * @method  UpdateShopCollection    getShops()
 * @method  $this                   setShops(array|UpdateShopCollection $shops)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Domain\Shop\Update\UpdateShop;
 * use Mirakl\MMP\Operator\Request\Shop\UpdateShopsRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 *
 * $input = ['shops'  => [
 *   'shop_id' => '124',
 *   'suspend' => true
 *  ]];
 *
 * $updateShop = new UpdateShop($input['shops'][0]);
 *
 * $request = new UpdateShopsRequest([$updateShop]);
 * $result = $api->updateShops($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Shop\Update\UpdatedShops
 * </code>
 */
class UpdateShopsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/shops';

    /**
     * @var array
     */
    public $bodyParams = ['shops'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shops' => [UpdateShopCollection::class, 'create'],
    ];

    /**
     * @param   mixed   $shops
     */
    public function __construct($shops)
    {
        parent::__construct();
        $this->setShops($shops);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UpdatedShops::decorator();
    }
}