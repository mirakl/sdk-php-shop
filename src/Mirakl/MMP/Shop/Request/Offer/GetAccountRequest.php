<?php
namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Shop\ShopAccount;

/**
 * (A01) Get shop information
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Offer\GetAccountRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $result = $api->getAccount();
 * // $result => @see \Mirakl\MMP\Shop\Domain\Shop\ShopAccount
 * </code>
 */
class GetAccountRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/account';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopAccount::decorator();
    }
}