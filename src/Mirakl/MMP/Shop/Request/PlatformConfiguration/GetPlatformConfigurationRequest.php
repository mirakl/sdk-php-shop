<?php
namespace Mirakl\MMP\Shop\Request\PlatformConfiguration;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\PlatformConfiguration\PlatformConfigurationResponse;

/**
 * (PC01) Get platform configurations
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\PlatformConfiguration\GetPlatformConfigurationRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetPlatformConfigurationRequest();
 * $result = $api->getPlatformConfiguration($request);
 *
 * // $result => @see \Mirakl\MMP\Shop\Domain\PlatformConfiguration\PlatformConfigurationResponse
 * </code>
 */
class GetPlatformConfigurationRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/platform/configuration';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return PlatformConfigurationResponse::decorator();
    }
}