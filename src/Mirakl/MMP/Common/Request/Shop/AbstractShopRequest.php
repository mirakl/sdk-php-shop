<?php
namespace Mirakl\MMP\Common\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;

/**
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 */
abstract class AbstractShopRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{shop}' => 'shop_id'
    ];

    /**
     * @param   string  $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();
        $this->setShopId($shopId);
    }
}